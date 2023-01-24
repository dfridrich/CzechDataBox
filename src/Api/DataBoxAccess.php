<?php

namespace Defr\CzechDataBox\Api;

use Defr\CzechDataBox\Api\tActivateInput;
use Defr\CzechDataBox\Api\tActivateOutput;
use Defr\CzechDataBox\Api\tAddDBUserInput;
use Defr\CzechDataBox\Api\tAddDBUserOutput;
use Defr\CzechDataBox\Api\tCheckDBOutput;
use Defr\CzechDataBox\Api\tChngPasswInput;
use Defr\CzechDataBox\Api\tCreateDBInput;
use Defr\CzechDataBox\Api\tCreateDBOutput;
use Defr\CzechDataBox\Api\tCreateDBPFOInfoInput;
use Defr\CzechDataBox\Api\tCreateDBPFOInfoOutput;
use Defr\CzechDataBox\Api\tDbOwnerInfo;
use Defr\CzechDataBox\Api\tDbOwnersArray;
use Defr\CzechDataBox\Api\tDbReqStatus;
use Defr\CzechDataBox\Api\tDbUserInfo;
use Defr\CzechDataBox\Api\tDbUsersArray;
use Defr\CzechDataBox\Api\tDelDBUserInput;
use Defr\CzechDataBox\Api\tDeleteDBInput;
use Defr\CzechDataBox\Api\tDeleteDBPromptlyInput;
use Defr\CzechDataBox\Api\tDisableExternallyInput;
use Defr\CzechDataBox\Api\tDummyInput;
use Defr\CzechDataBox\Api\tFindDBInput;
use Defr\CzechDataBox\Api\tFindDBOuput;
use Defr\CzechDataBox\Api\tGetDBListInput;
use Defr\CzechDataBox\Api\tGetDBListOutput;
use Defr\CzechDataBox\Api\tGetDBUsersOutput;
use Defr\CzechDataBox\Api\tGetOwnInfoOutput;
use Defr\CzechDataBox\Api\tGetPasswInfoOutput;
use Defr\CzechDataBox\Api\tGetUserInfoOutput;
use Defr\CzechDataBox\Api\tIdDbInput;
use Defr\CzechDataBox\Api\tNewAccDataInput;
use Defr\CzechDataBox\Api\tNewAccDataOutput;
use Defr\CzechDataBox\Api\tOwnerInfoInput;
use Defr\CzechDataBox\Api\tPDZInfoInput;
use Defr\CzechDataBox\Api\tPDZInfoOutput;
use Defr\CzechDataBox\Api\tPDZRec;
use Defr\CzechDataBox\Api\tPDZRecArray;
use Defr\CzechDataBox\Api\tReqStatusOutput;
use Defr\CzechDataBox\Api\tUpdateDBInput;
use Defr\CzechDataBox\Api\tUpdDBUserInput;
use SoapClient;
use function array_merge;

class DataBoxAccess extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static array $classmap =  [
      'tIdDbInput' => tIdDbInput::class,
      'tReqStatusOutput' => tReqStatusOutput::class,
      'tDbReqStatus' => tDbReqStatus::class,
      'tDbOwnerInfo' => tDbOwnerInfo::class,
      'tDbOwnersArray' => tDbOwnersArray::class,
      'tDbUserInfo' => tDbUserInfo::class,
      'tDbUsersArray' => tDbUsersArray::class,
      'tFindDBInput' => tFindDBInput::class,
      'tFindDBOuput' => tFindDBOuput::class,
      'tCreateDBInput' => tCreateDBInput::class,
      'tCreateDBOutput' => tCreateDBOutput::class,
      'tDeleteDBInput' => tDeleteDBInput::class,
      'tUpdateDBInput' => tUpdateDBInput::class,
      'tAddDBUserInput' => tAddDBUserInput::class,
      'tAddDBUserOutput' => tAddDBUserOutput::class,
      'tDelDBUserInput' => tDelDBUserInput::class,
      'tUpdDBUserInput' => tUpdDBUserInput::class,
      'tNewAccDataInput' => tNewAccDataInput::class,
      'tNewAccDataOutput' => tNewAccDataOutput::class,
      'tOwnerInfoInput' => tOwnerInfoInput::class,
      'tDisableExternallyInput' => tDisableExternallyInput::class,
      'tGetDBUsersOutput' => tGetDBUsersOutput::class,
      'tCheckDBOutput' => tCheckDBOutput::class,
      'tActivateInput' => tActivateInput::class,
      'tActivateOutput' => tActivateOutput::class,
      'tCreateDBPFOInfoInput' => tCreateDBPFOInfoInput::class,
      'tCreateDBPFOInfoOutput' => tCreateDBPFOInfoOutput::class,
      'tDummyInput' => tDummyInput::class,
      'tGetOwnInfoOutput' => tGetOwnInfoOutput::class,
      'tGetUserInfoOutput' => tGetUserInfoOutput::class,
      'tGetPasswInfoOutput' => tGetPasswInfoOutput::class,
      'tChngPasswInput' => tChngPasswInput::class,
      'tGetDBListInput' => tGetDBListInput::class,
      'tGetDBListOutput' => tGetDBListOutput::class,
      'tDeleteDBPromptlyInput' => tDeleteDBPromptlyInput::class,
      'tPDZInfoInput' => tPDZInfoInput::class,
      'tPDZRec' => tPDZRec::class,
      'tPDZRecArray' => tPDZRecArray::class,
      'tPDZInfoOutput' => tPDZInfoOutput::class,
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
            $wsdl = '/Users/dennis/sites/isas/vendor/dfridrich/czech-data-box/Resources/db_access.wsdl';
        }

        parent::__construct($wsdl, $options);
    }


    /**
     * @return tGetOwnInfoOutput
     */
    public function GetOwnerInfoFromLogin(tDummyInput $parameter)
    {
        return $this->soapCall('GetOwnerInfoFromLogin', [$parameter]);
    }


    /**
     * @param UNKNOWN $parameter
     * @return UNKNOWN
     */
    public function GetOwnerInfoFromLogin2($parameter)
    {
        return $this->soapCall('GetOwnerInfoFromLogin2', [$parameter]);
    }


    /**
     * @return tGetUserInfoOutput
     */
    public function GetUserInfoFromLogin(tDummyInput $parameter)
    {
        return $this->soapCall('GetUserInfoFromLogin', [$parameter]);
    }


    /**
     * @param UNKNOWN $parameter
     * @return UNKNOWN
     */
    public function GetUserInfoFromLogin2($parameter)
    {
        return $this->soapCall('GetUserInfoFromLogin2', [$parameter]);
    }


    /**
     * @return tReqStatusOutput
     */
    public function ChangeISDSPassword(tChngPasswInput $parameter)
    {
        return $this->soapCall('ChangeISDSPassword', [$parameter]);
    }


    /**
     * @return tGetPasswInfoOutput
     */
    public function GetPasswordInfo(tDummyInput $parameter)
    {
        return $this->soapCall('GetPasswordInfo', [$parameter]);
    }

}
