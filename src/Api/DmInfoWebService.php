<?php

namespace Defr\CzechDataBox\Api;

class DmInfoWebService extends \SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = array(
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
  'tConfirmDeliveryOutput' => 'Defr\\CzechDataBox\\Api\\tConfirmDeliveryOutput',
  'tAuthenticateMessageInput' => 'Defr\\CzechDataBox\\Api\\tAuthenticateMessageInput',
  'tAuthenticateMessageOutput' => 'Defr\\CzechDataBox\\Api\\tAuthenticateMessageOutput',
  'tGetStateChangesInput' => 'Defr\\CzechDataBox\\Api\\tGetStateChangesInput',
  'tStateChangesRecord' => 'Defr\\CzechDataBox\\Api\\tStateChangesRecord',
  'tStateChangesArray' => 'Defr\\CzechDataBox\\Api\\tStateChangesArray',
  'tGetStateChangesOutput' => 'Defr\\CzechDataBox\\Api\\tGetStateChangesOutput',
  'tGetAuthorInput' => 'Defr\\CzechDataBox\\Api\\tGetAuthorInput',
  'tGetAuthorOutput' => 'Defr\\CzechDataBox\\Api\\tGetAuthorOutput',
);

    /**
     * @param array  $options A array of config values
     * @param string $wsdl    The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'C:\www\CzechDataBox\Resources\dm_info.wsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
  'features' => 1,
), $options);
        parent::__construct($wsdl, $options);
    }

    /**
     * @param tIDMessInput $parameter
     *
     * @return tMessageVerifyOutput
     */
    public function VerifyMessage(tIDMessInput $parameter)
    {
        return $this->__soapCall('VerifyMessage', array($parameter));
    }

    /**
     * @param tIDMessInput $parameter
     *
     * @return tMessEnvelDownOutput
     */
    public function MessageEnvelopeDownload(tIDMessInput $parameter)
    {
        return $this->__soapCall('MessageEnvelopeDownload', array($parameter));
    }

    /**
     * @param tIDMessInput $parameter
     *
     * @return tMarkMessOutput
     */
    public function MarkMessageAsDownloaded(tIDMessInput $parameter)
    {
        return $this->__soapCall('MarkMessageAsDownloaded', array($parameter));
    }

    /**
     * @param tIDMessInput $parameter
     *
     * @return tDeliveryMessageOutput
     */
    public function GetDeliveryInfo(tIDMessInput $parameter)
    {
        return $this->__soapCall('GetDeliveryInfo', array($parameter));
    }

    /**
     * @param tIDMessInput $parameter
     *
     * @return tSignDelivMessOutput
     */
    public function GetSignedDeliveryInfo(tIDMessInput $parameter)
    {
        return $this->__soapCall('GetSignedDeliveryInfo', array($parameter));
    }

    /**
     * @param tListOfSentInput $parameter
     *
     * @return tListOfMessOutput
     */
    public function GetListOfSentMessages(tListOfSentInput $parameter)
    {
        return $this->__soapCall('GetListOfSentMessages', array($parameter));
    }

    /**
     * @param tListOfFReceivedInput $parameter
     *
     * @return tListOfMessOutput
     */
    public function GetListOfReceivedMessages(tListOfFReceivedInput $parameter)
    {
        return $this->__soapCall('GetListOfReceivedMessages', array($parameter));
    }

    /**
     * @param tIDMessInput $parameter
     *
     * @return tConfirmDeliveryOutput
     */
    public function ConfirmDelivery(tIDMessInput $parameter)
    {
        return $this->__soapCall('ConfirmDelivery', array($parameter));
    }

    /**
     * @param tGetStateChangesInput $parameter
     *
     * @return tGetStateChangesOutput
     */
    public function GetMessageStateChanges(tGetStateChangesInput $parameter)
    {
        return $this->__soapCall('GetMessageStateChanges', array($parameter));
    }

    /**
     * @param tGetAuthorInput $parameter
     *
     * @return tGetAuthorOutput
     */
    public function GetMessageAuthor(tGetAuthorInput $parameter)
    {
        return $this->__soapCall('GetMessageAuthor', array($parameter));
    }
}
