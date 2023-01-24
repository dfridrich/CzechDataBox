<?php

namespace Defr\CzechDataBox\Api;

use Defr\CzechDataBox\Api\dmDm;
use Defr\CzechDataBox\Api\dmEnvelope;
use Defr\CzechDataBox\Api\dmFile;
use Defr\CzechDataBox\Api\dmXMLContent;
use Defr\CzechDataBox\Api\tAuthenticateMessageInput;
use Defr\CzechDataBox\Api\tAuthenticateMessageOutput;
use Defr\CzechDataBox\Api\tConfirmDeliveryOutput;
use Defr\CzechDataBox\Api\tDelivery;
use Defr\CzechDataBox\Api\tDeliveryMessageOutput;
use Defr\CzechDataBox\Api\tEraseMessageIntput;
use Defr\CzechDataBox\Api\tEraseMessageOutput;
use Defr\CzechDataBox\Api\tEvent;
use Defr\CzechDataBox\Api\tEventsArray;
use Defr\CzechDataBox\Api\tFile;
use Defr\CzechDataBox\Api\tFilesArray;
use Defr\CzechDataBox\Api\tGetAuthorInput;
use Defr\CzechDataBox\Api\tGetAuthorOutput;
use Defr\CzechDataBox\Api\tGetStateChangesInput;
use Defr\CzechDataBox\Api\tGetStateChangesOutput;
use Defr\CzechDataBox\Api\tHash;
use Defr\CzechDataBox\Api\tIDMessInput;
use Defr\CzechDataBox\Api\tListOfFReceivedInput;
use Defr\CzechDataBox\Api\tListOfMessOutput;
use Defr\CzechDataBox\Api\tListOfSentInput;
use Defr\CzechDataBox\Api\tMarkMessOutput;
use Defr\CzechDataBox\Api\tMessageCreateInput;
use Defr\CzechDataBox\Api\tMessageCreateOutput;
use Defr\CzechDataBox\Api\tMessageEnvelopeSub;
use Defr\CzechDataBox\Api\tMessageVerifyOutput;
use Defr\CzechDataBox\Api\tMessDownOutput;
use Defr\CzechDataBox\Api\tMessEnvelDownOutput;
use Defr\CzechDataBox\Api\tMStatus;
use Defr\CzechDataBox\Api\tMultipleMessageCreateInput;
use Defr\CzechDataBox\Api\tMultipleMessageCreateOutput;
use Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub;
use Defr\CzechDataBox\Api\tMultipleMessageRecipients;
use Defr\CzechDataBox\Api\tMultipleStatus;
use Defr\CzechDataBox\Api\tRecipients;
use Defr\CzechDataBox\Api\tRecord;
use Defr\CzechDataBox\Api\tRecordsArray;
use Defr\CzechDataBox\Api\tResignDocInput;
use Defr\CzechDataBox\Api\tResignDocOutput;
use Defr\CzechDataBox\Api\tReturnedMessage;
use Defr\CzechDataBox\Api\tReturnedMessageEnvelope;
use Defr\CzechDataBox\Api\tSignDelivMessOutput;
use Defr\CzechDataBox\Api\tSignedMessDownOutput;
use Defr\CzechDataBox\Api\tStateChangesArray;
use Defr\CzechDataBox\Api\tStateChangesRecord;
use Defr\CzechDataBox\Api\tStatus;
use SoapClient;
use function array_merge;

class DmOperationsWebService extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static array $classmap =  [
      'tFile' => tFile::class,
      'dmXMLContent' => dmXMLContent::class,
      'tFilesArray' => tFilesArray::class,
      'dmFile' => dmFile::class,
      'tStatus' => tStatus::class,
      'tHash' => tHash::class,
      'tEvent' => tEvent::class,
      'tEventsArray' => tEventsArray::class,
      'tRecipients' => tRecipients::class,
      'tMultipleMessageEnvelopeSub' => tMultipleMessageEnvelopeSub::class,
      'tMultipleMessageRecipients' => tMultipleMessageRecipients::class,
      'tMultipleMessageCreateInput' => tMultipleMessageCreateInput::class,
      'dmEnvelope' => dmEnvelope::class,
      'tMultipleStatus' => tMultipleStatus::class,
      'tMStatus' => tMStatus::class,
      'tMultipleMessageCreateOutput' => tMultipleMessageCreateOutput::class,
      'tReturnedMessage' => tReturnedMessage::class,
      'dmDm' => dmDm::class,
      'tReturnedMessageEnvelope' => tReturnedMessageEnvelope::class,
      'tMessageEnvelopeSub' => tMessageEnvelopeSub::class,
      'tMessageCreateInput' => tMessageCreateInput::class,
      'tMessageCreateOutput' => tMessageCreateOutput::class,
      'tMessageVerifyOutput' => tMessageVerifyOutput::class,
      'tDelivery' => tDelivery::class,
      'tDeliveryMessageOutput' => tDeliveryMessageOutput::class,
      'tSignDelivMessOutput' => tSignDelivMessOutput::class,
      'tRecord' => tRecord::class,
      'tRecordsArray' => tRecordsArray::class,
      'tListOfSentInput' => tListOfSentInput::class,
      'tListOfMessOutput' => tListOfMessOutput::class,
      'tListOfFReceivedInput' => tListOfFReceivedInput::class,
      'tIDMessInput' => tIDMessInput::class,
      'tMessDownOutput' => tMessDownOutput::class,
      'tMessEnvelDownOutput' => tMessEnvelDownOutput::class,
      'tSignedMessDownOutput' => tSignedMessDownOutput::class,
      'tMarkMessOutput' => tMarkMessOutput::class,
      'tConfirmDeliveryOutput' => tConfirmDeliveryOutput::class,
      'tAuthenticateMessageInput' => tAuthenticateMessageInput::class,
      'tAuthenticateMessageOutput' => tAuthenticateMessageOutput::class,
      'tGetStateChangesInput' => tGetStateChangesInput::class,
      'tStateChangesRecord' => tStateChangesRecord::class,
      'tStateChangesArray' => tStateChangesArray::class,
      'tGetStateChangesOutput' => tGetStateChangesOutput::class,
      'tGetAuthorInput' => tGetAuthorInput::class,
      'tGetAuthorOutput' => tGetAuthorOutput::class,
      'tEraseMessageIntput' => tEraseMessageIntput::class,
      'tEraseMessageOutput' => tEraseMessageOutput::class,
      'tResignDocInput' => tResignDocInput::class,
      'tResignDocOutput' => tResignDocOutput::class,
    ];

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = [], $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge([
        'features' => 1,
        ], $options);
        if (!$wsdl) {
            $wsdl = '/Users/dennis/sites/isas/vendor/dfridrich/czech-data-box/Resources/dm_operations.wsdl';
        }

        parent::__construct($wsdl, $options);
    }


    /**
     * @return tMessageCreateOutput
     */
    public function CreateMessage(tMessageCreateInput $parameter)
    {
        return $this->soapCall('CreateMessage', [$parameter]);
    }


    /**
     * @return tMessDownOutput
     */
    public function MessageDownload(tIDMessInput $parameter)
    {
        return $this->soapCall('MessageDownload', [$parameter]);
    }


    /**
     * @return tSignedMessDownOutput
     */
    public function SignedMessageDownload(tIDMessInput $parameter)
    {
        return $this->soapCall('SignedMessageDownload', [$parameter]);
    }


    /**
     * @return tSignedMessDownOutput
     */
    public function SignedSentMessageDownload(tIDMessInput $parameter)
    {
        return $this->soapCall('SignedSentMessageDownload', [$parameter]);
    }


    /**
     * @param string $parameter
     * @return void
     */
    public function DummyOperation($parameter)
    {
        return $this->soapCall('DummyOperation', [$parameter]);
    }


    /**
     * @return tMultipleMessageCreateOutput
     */
    public function CreateMultipleMessage(tMultipleMessageCreateInput $parameter)
    {
        return $this->soapCall('CreateMultipleMessage', [$parameter]);
    }


    /**
     * @return tAuthenticateMessageOutput
     */
    public function AuthenticateMessage(tAuthenticateMessageInput $parameter)
    {
        return $this->soapCall('AuthenticateMessage', [$parameter]);
    }

}
