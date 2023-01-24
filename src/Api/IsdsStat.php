<?php

namespace Defr\CzechDataBox\Api;

use Defr\CzechDataBox\Api\tNumOfMessagesInput;
use Defr\CzechDataBox\Api\tNumOfMessagesOutput;
use Defr\CzechDataBox\Api\tStatReqStatus;
use SoapClient;
use function array_merge;

class IsdsStat extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static array $classmap =  [
      'tNumOfMessagesInput' => tNumOfMessagesInput::class,
      'tNumOfMessagesOutput' => tNumOfMessagesOutput::class,
      'tStatReqStatus' => tStatReqStatus::class,
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
            $wsdl = '/Users/dennis/sites/isas/vendor/dfridrich/czech-data-box/Resources/isds_stat.wsdl';
        }

        parent::__construct($wsdl, $options);
    }


    /**
     * @return tNumOfMessagesOutput
     */
    public function NumOfMessages(tNumOfMessagesInput $parameter)
    {
        return $this->soapCall('NumOfMessages', [$parameter]);
    }

}
