<?php

namespace Defr\CzechDataBox\Api;

class DmOperationsWebService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
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
      'tEraseMessageIntput' => 'Defr\\CzechDataBox\\Api\\tEraseMessageIntput',
      'tEraseMessageOutput' => 'Defr\\CzechDataBox\\Api\\tEraseMessageOutput',
      'tResignDocInput' => 'Defr\\CzechDataBox\\Api\\tResignDocInput',
      'tResignDocOutput' => 'Defr\\CzechDataBox\\Api\\tResignDocOutput',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '/Users/dennis/sites/isas/vendor/dfridrich/czech-data-box/Resources/dm_operations.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param tMessageCreateInput $parameter
     * @return tMessageCreateOutput
     */
    public function CreateMessage(tMessageCreateInput $parameter)
    {
      return $this->__soapCall('CreateMessage', array($parameter));
    }

    /**
     * @param tIDMessInput $parameter
     * @return tMessDownOutput
     */
    public function MessageDownload(tIDMessInput $parameter)
    {
      return $this->__soapCall('MessageDownload', array($parameter));
    }

    /**
     * @param tIDMessInput $parameter
     * @return tSignedMessDownOutput
     */
    public function SignedMessageDownload(tIDMessInput $parameter)
    {
      return $this->__soapCall('SignedMessageDownload', array($parameter));
    }

    /**
     * @param tIDMessInput $parameter
     * @return tSignedMessDownOutput
     */
    public function SignedSentMessageDownload(tIDMessInput $parameter)
    {
      return $this->__soapCall('SignedSentMessageDownload', array($parameter));
    }

    /**
     * @param string $parameter
     * @return void
     */
    public function DummyOperation($parameter)
    {
      return $this->__soapCall('DummyOperation', array($parameter));
    }

    /**
     * @param tMultipleMessageCreateInput $parameter
     * @return tMultipleMessageCreateOutput
     */
    public function CreateMultipleMessage(tMultipleMessageCreateInput $parameter)
    {
      return $this->__soapCall('CreateMultipleMessage', array($parameter));
    }

    /**
     * @param tAuthenticateMessageInput $parameter
     * @return tAuthenticateMessageOutput
     */
    public function AuthenticateMessage(tAuthenticateMessageInput $parameter)
    {
      return $this->__soapCall('AuthenticateMessage', array($parameter));
    }

}
