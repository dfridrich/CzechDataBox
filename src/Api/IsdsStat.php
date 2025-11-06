<?php

namespace Defr\CzechDataBox\Api;

class IsdsStat extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'tNumOfMessagesInput' => 'Defr\\CzechDataBox\\Api\\tNumOfMessagesInput',
      'tNumOfMessagesOutput' => 'Defr\\CzechDataBox\\Api\\tNumOfMessagesOutput',
      'tStatReqStatus' => 'Defr\\CzechDataBox\\Api\\tStatReqStatus',
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
            $wsdl = '/var/www/html/Resources/isds_stat.wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param tNumOfMessagesInput $parameter
     * @return tNumOfMessagesOutput
     */
    public function NumOfMessages(tNumOfMessagesInput $parameter)
    {
        return $this->__soapCall('NumOfMessages', array($parameter));
    }
}
