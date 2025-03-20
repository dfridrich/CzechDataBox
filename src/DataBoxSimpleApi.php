<?php

namespace Defr\CzechDataBox;

use DateInterval;
use DateTime;
use Defr\CzechDataBox\Api\tDbOwnerInfo;
use Defr\CzechDataBox\Api\tDbOwnersArray;
use Defr\CzechDataBox\Api\tDbUserInfo;
use Defr\CzechDataBox\Api\tDummyInput;
use Defr\CzechDataBox\Api\tFilesArray;
use Defr\CzechDataBox\Api\tFindDBInput;
use Defr\CzechDataBox\Api\tIDMessInput;
use Defr\CzechDataBox\Api\tListOfFReceivedInput;
use Defr\CzechDataBox\Api\tListOfSentInput;
use Defr\CzechDataBox\Api\tMessageCreateInput;
use Defr\CzechDataBox\Api\tMessageCreateOutput;
use Defr\CzechDataBox\Api\tMessageEnvelopeSub;
use Defr\CzechDataBox\Api\tNumOfMessagesInput;
use Defr\CzechDataBox\Api\tRecord;
use Defr\CzechDataBox\ApiExtensions\dmFile;
use function array_filter;
use function array_map;
use function basename;
use function file_get_contents;
use function is_array;
use function is_string;
use function md5;
use function mime_content_type;
use function strtoupper;
use function substr;

/**
 * Class DataBoxSimpleApi
 */
class DataBoxSimpleApi
{
    public function __construct(private DataBox $dataBox)
    {
    }


    /**
     * Vrátí informace o aktuální datové schránce.
     *
     * @return tDbOwnerInfo
     */
    public function getDataBoxInfo()
    {
        return $this->dataBox->DataBoxAccess()->GetOwnerInfoFromLogin(new tDummyInput(null))->getDbOwnerInfo();
    }


    /**
     * Vratí datum expirace hesla.
     *
     * @return \DateTime
     */
    public function getPasswordExpires()
    {
        return $this->dataBox->DataBoxAccess()->GetPasswordInfo(new tDummyInput(null))->getPswExpDate();
    }


    /**
     * Vrátí informace o aktuálním uživateli.
     *
     * @return tDbUserInfo
     */
    public function getUserInfo()
    {
        return $this->dataBox->DataBoxAccess()->GetUserInfoFromLogin(new tDummyInput(null))->getDbUserInfo();
    }


    /**
     * Stahne seznam prijatych zprav v DS.
     *
     * @param int $days
     * @param int $limit
     *
     * @return tRecord[]|null
     *
     * @throws DataBoxException
     */
    public function getListOfReceivedMessages($days = 90, $limit = 1000)
    {
        if ($days < 0 || $limit < 1) {
            throw new DataBoxException();
        }

        $params = new tListOfFReceivedInput();
        $params->setDmToTime(new DateTime())
            ->setDmFromTime((new DateTime())->sub(new DateInterval('P'.$days.'D')))
            ->setDmLimit($limit)
            ->setDmOffset(0)
            ->setDmRecipientOrgUnitNum(null)
            ->setDmStatusFilter(-1);

        $result = $this->dataBox->DmInfoWebService()->GetListOfReceivedMessages($params)->getDmRecords()->getDmRecord();

        return $this->returnAsArray($result);
    }


    /**
     * Vrati zmeny odeslanych DZ.
     *
     * @param int $days
     * @param int $limit
     *
     * @return tRecord[]|null
     *
     * @throws DataBoxException
     */
    public function getListOfSentMessages($days = 90, $limit = 1000)
    {
        if ($days < 0 || $limit < 1) {
            throw new DataBoxException();
        }

        $params = new tListOfSentInput();
        $params->setDmToTime(new DateTime())
            ->setDmFromTime((new DateTime())->sub(new DateInterval('P'.$days.'D')))
            ->setDmLimit($limit)
            ->setDmOffset(0)
            ->setDmSenderOrgUnitNum(null)
            ->setDmStatusFilter(-1);

        $result = $this->dataBox->DmInfoWebService()->GetListOfSentMessages($params)->getDmRecords()->getDmRecord();

        return $this->returnAsArray($result);
    }


    /**
     * Vyhleda DS na zaklade ID.
     *
     * @param $dataBoxId
     *
     * @return tDbOwnersArray
     */
    public function findDataBoxById($dataBoxId)
    {
        $params = new tFindDBInput();
        $owner = new tDbOwnerInfo();
        $owner->setDbID($dataBoxId);

        $params->setDbOwnerInfo($owner);

        return $this->dataBox->DataBoxSearch()->FindDataBox($params)->getDbResults();
    }


    /**
     * Stáhne přijatou DZ ve formátu ZFO.
     *
     * @param $dataMessageId
     *
     * @return DataBoxMessageFile
     *
     * @throws DataBoxException
     */
    public function downloadSignedReceivedMessage($dataMessageId)
    {
        $file = $this->getLocationForMessage($dataMessageId, 'r');
        if (!$file->getIsExist()) {
            $content = $this->dataBox->DmOperationsWebService()->SignedMessageDownload(
                (new tIDMessInput())->setDmID($dataMessageId),
            )->getDmSignature();
            $file->save($content);
        }

        return $file;
    }


    /**
     * Stáhne odeslanou DZ ve formátu ZFO.
     *
     * @param $dataMessageId
     *
     * @return DataBoxMessageFile
     *
     * @throws DataBoxException
     */
    public function downloadSignedSentMessage($dataMessageId)
    {
        $file = $this->getLocationForMessage($dataMessageId, 's');
        if (!$file->getIsExist()) {
            $content = $this->dataBox->DmOperationsWebService()->SignedSentMessageDownload(
                (new tIDMessInput())->setDmID($dataMessageId),
            )->getDmSignature();
            $file->save($content);
        }

        return $file;
    }


    /**
     * Stáhne doručenku odeslané zprávy.
     *
     * @param $dataMessageId
     *
     * @return DataBoxMessageFile
     *
     * @throws DataBoxException
     */
    public function downloadDeliveryInfo($dataMessageId)
    {
        $file = $this->getLocationForMessage($dataMessageId, 'di');
        if (!$file->getIsExist()) {
            $content = $this->dataBox->DmInfoWebService()->GetSignedDeliveryInfo(
                (new tIDMessInput())->setDmID($dataMessageId),
            )->getDmSignature();
            $file->save($content);
        }

        return $file;
    }


    /**
     * Stáhne všechny přílohy datové zprávy.
     *
     * @param $dataMessageId
     *
     * @return DataBoxMessageAttachment[]|array
     *
     * @throws DataBoxException
     */
    public function getReceivedDataMessageAttachments($dataMessageId)
    {

        /** @var dmFile[] $attachments */
        $attachments = $this->dataBox->DmOperationsWebService()->MessageDownload(
            new tIDMessInput($dataMessageId),
        )->getDmReturnedMessage()->getDmDm()->getDmFiles()->getDmFile();
        $files = [];

        foreach ($attachments as $attachment) {
            $file = $this->getLocationForAttachment($dataMessageId, $attachment->getDmFileDescr());
            if (!$file->getIsExist()) {
                $content = $attachment->getDmEncodedContent();
                $file->save($content);
            }

            $files[] = $file;
        }

        return $files;
    }


    /**
     * Vytvoří základní zprávu k odeslání
     *
     * @param string $recipient Recipient's DataBox ID
     * @param string $subject Message annotation
     * @param array $attachments Paths to files attached to the message
     *
     * @return tMessageCreateInput
     * @throws DataBoxException
     */
    public function createBasicDataMessage($recipient, $subject, array $attachments = [])
    {
        if (!is_string($recipient)) {
            throw new DataBoxException("Invalid recipient data type provided");
        } elseif (!is_string($subject)) {
            throw new DataBoxException("Invalid subject data type provided");
        }

        // Create an envelope, for some reason the dmEnvelope is not processed
        // properly and returns an internal error
        $envelope = new tMessageEnvelopeSub(
            null,
            null,
            $recipient,
            null,
            null,
            null,
            $subject,
        );

        // Make sure the attachments exist. If you have files stored in the memory
        // just do not pass any attachments and create the dmFile object yourself,
        // then set it as an array to dmFiles
        $attachments = array_filter($attachments, '\file_exists');

        // Creates the dmFile object for each of the attachments, gets mime
        // type and file name from the file
        $attachments = array_map(
            static function ($filePath) {
                $file = new dmFile();
                $file->setDmMimeType(self::mimeType($filePath));
                $file->setDmFileDescr(basename($filePath));
                $file->setDmEncodedContent(file_get_contents($filePath));
                return $file;
            },
            $attachments,
        );


        $dmFiles = new tFilesArray();
        if ($attachments !== []) {
            // tFilesArray is not properly generated, it should accept an array of dmFile objects
            $dmFiles->setDmFile($attachments);
        }

        return new tMessageCreateInput($envelope, $dmFiles);
    }


    /**
     * Pošle datovou zprávu.
     *
     *
     * @return tMessageCreateOutput
     * @throws DataBoxException
     */
    public function sendDataMessage(tMessageCreateInput $messageToSent)
    {
        return $this->dataBox->DmOperationsWebService()->CreateMessage($messageToSent);
    }


    /**
     * Počet zpráv odeslaných v celém systému ISDS.
     *
     * @return int
     */
    public function getStats()
    {
        $input = new tNumOfMessagesInput();

        return $this->dataBox->IsdsStat()->NumOfMessages($input)->getStatResult();
    }


    /**
     * @param $input
     *
     * @return array
     */
    private function returnAsArray($input)
    {
        if (is_array($input)) {
            return $input;
        } else {
            return [$input];
        }
    }


    /**
     * @param $messageId
     * @param null $suffix
     *
     * @return DataBoxMessageFile
     */
    private function getLocationForMessage($messageId, $suffix = null)
    {
        if ($suffix !== null && substr($suffix, 1, 1) != '_') {
            $suffix = '_'.$suffix;
        }

        $hash = md5($messageId);
        $subFolder = substr($hash, 0, 2).'/'.substr($hash, 2, 2).'/'.substr($hash, 4, 2);
        $location = $this->dataBox->getDirectory().'/'.$subFolder.'/'.$messageId.strtoupper($suffix).'.zfo';

        return new DataBoxMessageFile($location);
    }


    /**
     * @param $messageId
     * @param $fileName
     *
     * @return DataBoxMessageAttachment
     */
    private function getLocationForAttachment($messageId, $fileName)
    {
        $hash = md5($messageId);
        $subFolder = substr($hash, 0, 2).'/'.substr($hash, 2, 2).'/'.substr($hash, 4, 2);
        $location = $this->dataBox->getDirectory().'/'.$subFolder.'/'.$messageId.'/'.$fileName;

        return new DataBoxMessageAttachment($location);
    }


    /**
     * @param $fileName
     * @return false|string
     */
    private static function mimeType($fileName): bool|string
    {
        $mime_types = array(
            'isdoc' => 'application/zip',
            'isdocx' => 'text/xml',
            'zfo' => 'application/vnd.software602.filler.form-xml-zip',
        );

        if (!str_contains($fileName, '.')) {
            $ext = '';
        } else {
            $a = explode('.', $fileName);
            $ext = strtolower(array_pop($a));
        }

        if (array_key_exists($ext, $mime_types)) {
            return $mime_types[$ext];
        }

        return mime_content_type($fileName);
    }
}
