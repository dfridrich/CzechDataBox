<?php

namespace Defr\CzechDataBox;

use Defr\CzechDataBox\Api\dmFile;
use Defr\CzechDataBox\Api\tDbOwnerInfo;
use Defr\CzechDataBox\Api\tDbOwnersArray;
use Defr\CzechDataBox\Api\tDbUserInfo;
use Defr\CzechDataBox\Api\tDummyInput;
use Defr\CzechDataBox\Api\tFindDBInput;
use Defr\CzechDataBox\Api\tIDMessInput;
use Defr\CzechDataBox\Api\tListOfFReceivedInput;
use Defr\CzechDataBox\Api\tListOfSentInput;
use Defr\CzechDataBox\Api\tNumOfMessagesInput;
use Defr\CzechDataBox\Api\tRecord;

/**
 * Class DataBoxSimpleApi
 * @package Defr\CzechDataBox
 */
class DataBoxSimpleApi
{
    /**
     * @var DataBox
     */
    private $dataBox;

    /**
     * @param DataBox $dataBox
     */
    public function __construct(DataBox $dataBox)
    {
        $this->dataBox = $dataBox;
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
        if ($days < 0 or $limit < 1) {
            throw new DataBoxException();
        }

        $params = new tListOfFReceivedInput();
        $params->setDmToTime(new \DateTime())
            ->setDmFromTime((new \DateTime())->sub(new \DateInterval('P' . $days . 'D')))
            ->setDmLimit($limit)
            ->setDmOffset(0)
            ->setDmRecipientOrgUnitNum(null)
            ->setDmStatusFilter(-1);

        $result = $this->dataBox->DmInfoWebService()->GetListOfReceivedMessages($params)->getDmRecords()->getDmRecord();
        $result = $this->returnAsArray($result);

        return $result;
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
        if ($days < 0 or $limit < 1) {
            throw new DataBoxException();
        }

        $params = new tListOfSentInput();
        $params->setDmToTime(new \DateTime())
            ->setDmFromTime((new \DateTime())->sub(new \DateInterval('P' . $days . 'D')))
            ->setDmLimit($limit)
            ->setDmOffset(0)
            ->setDmSenderOrgUnitNum(null)
            ->setDmStatusFilter(-1);

        $result = $this->dataBox->DmInfoWebService()->GetListOfSentMessages($params)->getDmRecords()->getDmRecord();
        $result = $this->returnAsArray($result);

        return $result;
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
        if (false === $file->getIsExist()) {
            $content = $this->dataBox->DmOperationsWebService()->SignedMessageDownload((new tIDMessInput())->setDmID($dataMessageId))->getDmSignature();
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
        if (false === $file->getIsExist()) {
            $content = $this->dataBox->DmOperationsWebService()->SignedSentMessageDownload((new tIDMessInput())->setDmID($dataMessageId))->getDmSignature();
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
        if (false === $file->getIsExist()) {
            $content = $this->dataBox->DmInfoWebService()->GetSignedDeliveryInfo((new tIDMessInput())->setDmID($dataMessageId))->getDmSignature();
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
        $attachments = $this->dataBox->DmOperationsWebService()->MessageDownload(new tIDMessInput($dataMessageId))->getDmReturnedMessage()->getDmDm()->dmFiles->getDmFile();
        $files = [];

        foreach ($attachments as $attachment) {
            $file = $this->getLocationForAttachment($dataMessageId, $attachment->getDmFileDescr());
            if (false === $file->getIsExist()) {
                $content = $attachment->dmEncodedContent;
                $file->save($content);
            }
            $files[] = $file;
        }

        return $files;
    }

    /**
     * Pošle datovou zprávu.
     *
     * @throws DataBoxException
     */
    public function sendDataMessage()
    {
        throw new DataBoxException('Not implemented yet.');
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
            $suffix = '_' . $suffix;
        }

        $hash = md5($messageId);
        $subFolder = substr($hash, 0, 2) . '/' . substr($hash, 2, 2) . '/' . substr($hash, 4, 2);
        $location = $this->dataBox->getDirectory() . '/' . $subFolder . '/' . $messageId . strtoupper($suffix) . '.zfo';

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
        $subFolder = substr($hash, 0, 2) . '/' . substr($hash, 2, 2) . '/' . substr($hash, 4, 2);
        $location = $this->dataBox->getDirectory() . '/' . $subFolder . '/' . $messageId . '/' . $fileName;

        return new DataBoxMessageAttachment($location);
    }
}
