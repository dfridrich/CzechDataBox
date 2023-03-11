<?php

namespace Defr\CzechDataBox\Api;

use SoapClient;
use function array_merge;

class DmInfoWebService extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap =  [
      'tFile' => 'Defr\\CzechDataBox\\Api\\tFile',
      'dmXMLContent' => 'Defr\\CzechDataBox\\Api\\dmXMLContent',
      'tFilesArray' => 'Defr\\CzechDataBox\\Api\\tFilesArray',
      'dmFile' => 'Defr\\CzechDataBox\\Api\\dmFile',
      'tStatus' => 'Defr\\CzechDataBox\\Api\\tStatus',
      'tHash' => 'Defr\\CzechDataBox\\Api\\tHash',
      'tEvent' => 'Defr\\CzechDataBox\\Api\\tEvent',
      'tEventsArray' => 'Defr\\CzechDataBox\\Api\\tEventsArray',
      'tRecipients' => 'Defr\\CzechDataBox\\Api\\tRecipients',
      'tMultipleMessageEnvelopeSub' => 'Defr\\CzechDataBox\\Api\\tMultipleMessageEnvelopeSub',
      'dmPublishOwnID' => 'Defr\\CzechDataBox\\Api\\dmPublishOwnID',
      'tMultipleMessageRecipients' => 'Defr\\CzechDataBox\\Api\\tMultipleMessageRecipients',
      'tMultipleMessageCreateInput' => 'Defr\\CzechDataBox\\Api\\tMultipleMessageCreateInput',
      'dmEnvelope' => 'Defr\\CzechDataBox\\Api\\dmEnvelope',
      'tMultipleStatus' => 'Defr\\CzechDataBox\\Api\\tMultipleStatus',
      'tMStatus' => 'Defr\\CzechDataBox\\Api\\tMStatus',
      'tMultipleMessageCreateOutput' => 'Defr\\CzechDataBox\\Api\\tMultipleMessageCreateOutput',
      'tReturnedMessage' => 'Defr\\CzechDataBox\\Api\\tReturnedMessage',
      'dmDm' => 'Defr\\CzechDataBox\\Api\\dmDm',
      'tReturnedMessageEnvelope' => 'Defr\\CzechDataBox\\Api\\tReturnedMessageEnvelope',
      'tMessageEnvelopeSub' => 'Defr\\CzechDataBox\\Api\\tMessageEnvelopeSub',
      'tMessageCreateInput' => 'Defr\\CzechDataBox\\Api\\tMessageCreateInput',
      'tMessageCreateOutput' => 'Defr\\CzechDataBox\\Api\\tMessageCreateOutput',
      'tMessageVerifyOutput' => 'Defr\\CzechDataBox\\Api\\tMessageVerifyOutput',
      'tDelivery' => 'Defr\\CzechDataBox\\Api\\tDelivery',
      'tDeliveryMessageOutput' => 'Defr\\CzechDataBox\\Api\\tDeliveryMessageOutput',
      'tSignDelivMessOutput' => 'Defr\\CzechDataBox\\Api\\tSignDelivMessOutput',
      'tRecord' => 'Defr\\CzechDataBox\\Api\\tRecord',
      'tRecordsArray' => 'Defr\\CzechDataBox\\Api\\tRecordsArray',
      'tListOfSentInput' => 'Defr\\CzechDataBox\\Api\\tListOfSentInput',
      'tListOfMessOutput' => 'Defr\\CzechDataBox\\Api\\tListOfMessOutput',
      'tListOfFReceivedInput' => 'Defr\\CzechDataBox\\Api\\tListOfFReceivedInput',
      'tIDMessInput' => 'Defr\\CzechDataBox\\Api\\tIDMessInput',
      'tMessDownOutput' => 'Defr\\CzechDataBox\\Api\\tMessDownOutput',
      'tMessEnvelDownOutput' => 'Defr\\CzechDataBox\\Api\\tMessEnvelDownOutput',
      'tSignedMessDownOutput' => 'Defr\\CzechDataBox\\Api\\tSignedMessDownOutput',
      'tMarkMessOutput' => 'Defr\\CzechDataBox\\Api\\tMarkMessOutput',
      'tAuthenticateMessageInput' => 'Defr\\CzechDataBox\\Api\\tAuthenticateMessageInput',
      'tAuthenticateMessageOutput' => 'Defr\\CzechDataBox\\Api\\tAuthenticateMessageOutput',
      'tGetStateChangesInput' => 'Defr\\CzechDataBox\\Api\\tGetStateChangesInput',
      'tStateChangesRecord' => 'Defr\\CzechDataBox\\Api\\tStateChangesRecord',
      'tStateChangesArray' => 'Defr\\CzechDataBox\\Api\\tStateChangesArray',
      'tGetStateChangesOutput' => 'Defr\\CzechDataBox\\Api\\tGetStateChangesOutput',
      'tGetAuthorInput' => 'Defr\\CzechDataBox\\Api\\tGetAuthorInput',
      'tGetAuthorOutput' => 'Defr\\CzechDataBox\\Api\\tGetAuthorOutput',
      'tEraseMessageIntput' => 'Defr\\CzechDataBox\\Api\\tEraseMessageIntput',
      'tEraseMessageOutput' => 'Defr\\CzechDataBox\\Api\\tEraseMessageOutput',
      'tResignDocInput' => 'Defr\\CzechDataBox\\Api\\tResignDocInput',
      'tResignDocOutput' => 'Defr\\CzechDataBox\\Api\\tResignDocOutput',
      'tGetListOfErasedInput' => 'Defr\\CzechDataBox\\Api\\tGetListOfErasedInput',
      'tGetListOfErasedOutput' => 'Defr\\CzechDataBox\\Api\\tGetListOfErasedOutput',
      'tPickUpAsyncInput' => 'Defr\\CzechDataBox\\Api\\tPickUpAsyncInput',
      'tPickUpAsyncOutput' => 'Defr\\CzechDataBox\\Api\\tPickUpAsyncOutput',
      'tListForNotifInput' => 'Defr\\CzechDataBox\\Api\\tListForNotifInput',
      'tListForNotifOutput' => 'Defr\\CzechDataBox\\Api\\tListForNotifOutput',
      'tNtfRecordsArray' => 'Defr\\CzechDataBox\\Api\\tNtfRecordsArray',
      'tNtfRecord' => 'Defr\\CzechDataBox\\Api\\tNtfRecord',
      'RegisterForNotifications' => 'Defr\\CzechDataBox\\Api\\RegisterForNotifications',
      'RegisterForNotificationsResponse' => 'Defr\\CzechDataBox\\Api\\RegisterForNotificationsResponse',
      'UploadAttachment' => 'Defr\\CzechDataBox\\Api\\UploadAttachment',
      'UploadAttachmentResponse' => 'Defr\\CzechDataBox\\Api\\UploadAttachmentResponse',
      'dmAttHash1' => 'Defr\\CzechDataBox\\Api\\dmAttHash1',
      'dmAttHash2' => 'Defr\\CzechDataBox\\Api\\dmAttHash2',
      'DownloadAttachment' => 'Defr\\CzechDataBox\\Api\\DownloadAttachment',
      'DownloadAttachmentResponse' => 'Defr\\CzechDataBox\\Api\\DownloadAttachmentResponse',
      'tBigMessageInput' => 'Defr\\CzechDataBox\\Api\\tBigMessageInput',
      'dmFiles' => 'Defr\\CzechDataBox\\Api\\dmFiles',
      'dmExtFile' => 'Defr\\CzechDataBox\\Api\\dmExtFile',
      'tBigMessEnvelope' => 'Defr\\CzechDataBox\\Api\\tBigMessEnvelope',
      'tBigMessageOutput' => 'Defr\\CzechDataBox\\Api\\tBigMessageOutput',
      'AuthenticateBigMessage' => 'Defr\\CzechDataBox\\Api\\AuthenticateBigMessage',
      'AuthenticateBigMessageResponse' => 'Defr\\CzechDataBox\\Api\\AuthenticateBigMessageResponse',
      'SignedBigMessageDownload' => 'Defr\\CzechDataBox\\Api\\SignedBigMessageDownload',
      'SignedBigMessageDownloadResponse' => 'Defr\\CzechDataBox\\Api\\SignedBigMessageDownloadResponse',
      'SignedSentBigMessageDownload' => 'Defr\\CzechDataBox\\Api\\SignedSentBigMessageDownload',
      'SignedSentBigMessageDownloadResponse' => 'Defr\\CzechDataBox\\Api\\SignedSentBigMessageDownloadResponse',
      'BigMessageDownload' => 'Defr\\CzechDataBox\\Api\\BigMessageDownload',
      'BigMessageDownloadResponse' => 'Defr\\CzechDataBox\\Api\\BigMessageDownloadResponse',
      'dmReturnedMessage' => 'Defr\\CzechDataBox\\Api\\dmReturnedMessage',
      'GetMessageAuthor2Response' => 'Defr\\CzechDataBox\\Api\\GetMessageAuthor2Response',
      'dmMessageAuthor' => 'Defr\\CzechDataBox\\Api\\dmMessageAuthor',
      'maItem' => 'Defr\\CzechDataBox\\Api\\maItem',
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
            $wsdl = '/Users/dennis/sites/CzechDataBox/Resources/dm_info.wsdl';
        }
        parent::__construct($wsdl, $options);
    }


    /**
     * @param tIDMessInput $parameter
     * @return tMessageVerifyOutput
     */
    public function VerifyMessage(tIDMessInput $parameter)
    {
        return $this->__soapCall('VerifyMessage', [$parameter]);
    }


    /**
     * @param tIDMessInput $parameter
     * @return tMessEnvelDownOutput
     */
    public function MessageEnvelopeDownload(tIDMessInput $parameter)
    {
        return $this->__soapCall('MessageEnvelopeDownload', [$parameter]);
    }


    /**
     * @param tIDMessInput $parameter
     * @return tMarkMessOutput
     */
    public function MarkMessageAsDownloaded(tIDMessInput $parameter)
    {
        return $this->__soapCall('MarkMessageAsDownloaded', [$parameter]);
    }


    /**
     * @param tIDMessInput $parameter
     * @return tDeliveryMessageOutput
     */
    public function GetDeliveryInfo(tIDMessInput $parameter)
    {
        return $this->__soapCall('GetDeliveryInfo', [$parameter]);
    }


    /**
     * @param tIDMessInput $parameter
     * @return tSignDelivMessOutput
     */
    public function GetSignedDeliveryInfo(tIDMessInput $parameter)
    {
        return $this->__soapCall('GetSignedDeliveryInfo', [$parameter]);
    }


    /**
     * @param tListOfSentInput $parameter
     * @return tListOfMessOutput
     */
    public function GetListOfSentMessages(tListOfSentInput $parameter)
    {
        return $this->__soapCall('GetListOfSentMessages', [$parameter]);
    }


    /**
     * @param tListOfFReceivedInput $parameter
     * @return tListOfMessOutput
     */
    public function GetListOfReceivedMessages(tListOfFReceivedInput $parameter)
    {
        return $this->__soapCall('GetListOfReceivedMessages', [$parameter]);
    }


    /**
     * @param tGetStateChangesInput $parameter
     * @return tGetStateChangesOutput
     */
    public function GetMessageStateChanges(tGetStateChangesInput $parameter)
    {
        return $this->__soapCall('GetMessageStateChanges', [$parameter]);
    }


    /**
     * @param tGetAuthorInput $parameter
     * @return tGetAuthorOutput
     */
    public function GetMessageAuthor(tGetAuthorInput $parameter)
    {
        return $this->__soapCall('GetMessageAuthor', [$parameter]);
    }


    /**
     * @param tGetAuthorInput $parameter
     * @return GetMessageAuthor2Response
     */
    public function GetMessageAuthor2(tGetAuthorInput $parameter)
    {
        return $this->__soapCall('GetMessageAuthor2', [$parameter]);
    }


    /**
     * @param tEraseMessageIntput $parameter
     * @return tEraseMessageOutput
     */
    public function EraseMessage(tEraseMessageIntput $parameter)
    {
        return $this->__soapCall('EraseMessage', [$parameter]);
    }


    /**
     * @param tGetListOfErasedInput $parameter
     * @return tGetListOfErasedOutput
     */
    public function GetListOfErasedMessages(tGetListOfErasedInput $parameter)
    {
        return $this->__soapCall('GetListOfErasedMessages', [$parameter]);
    }


    /**
     * @param tPickUpAsyncInput $parameter
     * @return tPickUpAsyncOutput
     */
    public function PickUpAsyncResponse(tPickUpAsyncInput $parameter)
    {
        return $this->__soapCall('PickUpAsyncResponse', [$parameter]);
    }


    /**
     * @param tListForNotifInput $parameter
     * @return tListForNotifOutput
     */
    public function GetListForNotifications(tListForNotifInput $parameter)
    {
        return $this->__soapCall('GetListForNotifications', [$parameter]);
    }


    /**
     * @param RegisterForNotifications $parameter
     * @return RegisterForNotificationsResponse
     */
    public function RegisterForNotifications(RegisterForNotifications $parameter)
    {
        return $this->__soapCall('RegisterForNotifications', [$parameter]);
    }

}
