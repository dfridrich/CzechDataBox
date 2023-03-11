<?php

namespace Defr\CzechDataBox\Api;

class DataBoxAccess extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'dbID' => 'Defr\\CzechDataBox\\Api\\dbID',
      'tIdDBInput' => 'Defr\\CzechDataBox\\Api\\tIdDBInput',
      'tIdDBDUInput' => 'Defr\\CzechDataBox\\Api\\tIdDBDUInput',
      'tIdDBInputAttrs' => 'Defr\\CzechDataBox\\Api\\tIdDBInputAttrs',
      'tIdDBDUInputAttrs2' => 'Defr\\CzechDataBox\\Api\\tIdDBDUInputAttrs2',
      'tReqStatusOutput' => 'Defr\\CzechDataBox\\Api\\tReqStatusOutput',
      'tDbReqStatus' => 'Defr\\CzechDataBox\\Api\\tDbReqStatus',
      'tDbUserInfo' => 'Defr\\CzechDataBox\\Api\\tDbUserInfo',
      'tDbUserInfoExt' => 'Defr\\CzechDataBox\\Api\\tDbUserInfoExt',
      'tDbUserInfoExt2' => 'Defr\\CzechDataBox\\Api\\tDbUserInfoExt2',
      'tDbOwnerInfo' => 'Defr\\CzechDataBox\\Api\\tDbOwnerInfo',
      'tDbOwnerInfoExt' => 'Defr\\CzechDataBox\\Api\\tDbOwnerInfoExt',
      'tDbOwnerInfoExt2' => 'Defr\\CzechDataBox\\Api\\tDbOwnerInfoExt2',
      'tDbOwnersArray' => 'Defr\\CzechDataBox\\Api\\tDbOwnersArray',
      'tDbOwnersArray2' => 'Defr\\CzechDataBox\\Api\\tDbOwnersArray2',
      'tDbUsersArray' => 'Defr\\CzechDataBox\\Api\\tDbUsersArray',
      'dbUserInfo' => 'Defr\\CzechDataBox\\Api\\dbUserInfo',
      'tDbUsersArray2' => 'Defr\\CzechDataBox\\Api\\tDbUsersArray2',
      'tFindDBInput' => 'Defr\\CzechDataBox\\Api\\tFindDBInput',
      'tFindDBOuput' => 'Defr\\CzechDataBox\\Api\\tFindDBOuput',
      'tFindDBInput2' => 'Defr\\CzechDataBox\\Api\\tFindDBInput2',
      'tFindDBOuput2' => 'Defr\\CzechDataBox\\Api\\tFindDBOuput2',
      'tCreateDBInput' => 'Defr\\CzechDataBox\\Api\\tCreateDBInput',
      'dbOwnerInfo' => 'Defr\\CzechDataBox\\Api\\dbOwnerInfo',
      'tCreateDBOutput' => 'Defr\\CzechDataBox\\Api\\tCreateDBOutput',
      'tCreateDBInput2' => 'Defr\\CzechDataBox\\Api\\tCreateDBInput2',
      'tCreateDBOutput2' => 'Defr\\CzechDataBox\\Api\\tCreateDBOutput2',
      'tDeleteDBInput' => 'Defr\\CzechDataBox\\Api\\tDeleteDBInput',
      'tDeleteDBInput2' => 'Defr\\CzechDataBox\\Api\\tDeleteDBInput2',
      'tUpdateDBInput2' => 'Defr\\CzechDataBox\\Api\\tUpdateDBInput2',
      'tUpdateDBInput' => 'Defr\\CzechDataBox\\Api\\tUpdateDBInput',
      'tAddDBUserInput' => 'Defr\\CzechDataBox\\Api\\tAddDBUserInput',
      'tAddDBUserOutput' => 'Defr\\CzechDataBox\\Api\\tAddDBUserOutput',
      'tAddDBUserInput2' => 'Defr\\CzechDataBox\\Api\\tAddDBUserInput2',
      'tAddDBUserOutput2' => 'Defr\\CzechDataBox\\Api\\tAddDBUserOutput2',
      'tDelDBUserInput' => 'Defr\\CzechDataBox\\Api\\tDelDBUserInput',
      'tDelDBUserInput2' => 'Defr\\CzechDataBox\\Api\\tDelDBUserInput2',
      'tUpdDBUserInput' => 'Defr\\CzechDataBox\\Api\\tUpdDBUserInput',
      'tUpdDBUserInput2' => 'Defr\\CzechDataBox\\Api\\tUpdDBUserInput2',
      'tNewAccDataInput' => 'Defr\\CzechDataBox\\Api\\tNewAccDataInput',
      'tNewAccDataOutput' => 'Defr\\CzechDataBox\\Api\\tNewAccDataOutput',
      'tNewAccDataInput2' => 'Defr\\CzechDataBox\\Api\\tNewAccDataInput2',
      'tNewAccDataOutput2' => 'Defr\\CzechDataBox\\Api\\tNewAccDataOutput2',
      'tOwnerInfoInput' => 'Defr\\CzechDataBox\\Api\\tOwnerInfoInput',
      'tDisableExternallyInput' => 'Defr\\CzechDataBox\\Api\\tDisableExternallyInput',
      'tDisableExternallyInput2' => 'Defr\\CzechDataBox\\Api\\tDisableExternallyInput2',
      'tGetDBUsers2Output' => 'Defr\\CzechDataBox\\Api\\tGetDBUsers2Output',
      'tCheckDBOutput' => 'Defr\\CzechDataBox\\Api\\tCheckDBOutput',
      'tDummyInput' => 'Defr\\CzechDataBox\\Api\\tDummyInput',
      'tGetOwnInfoOutput2' => 'Defr\\CzechDataBox\\Api\\tGetOwnInfoOutput2',
      'tGetUserInfoOutput2' => 'Defr\\CzechDataBox\\Api\\tGetUserInfoOutput2',
      'tGetOwnInfoOutput' => 'Defr\\CzechDataBox\\Api\\tGetOwnInfoOutput',
      'tGetUserInfoOutput' => 'Defr\\CzechDataBox\\Api\\tGetUserInfoOutput',
      'tGetPasswInfoOutput' => 'Defr\\CzechDataBox\\Api\\tGetPasswInfoOutput',
      'tChngPasswInput' => 'Defr\\CzechDataBox\\Api\\tChngPasswInput',
      'tGetDBListInput' => 'Defr\\CzechDataBox\\Api\\tGetDBListInput',
      'tGetDBListOutput' => 'Defr\\CzechDataBox\\Api\\tGetDBListOutput',
      'tDeleteDBPromptlyInput' => 'Defr\\CzechDataBox\\Api\\tDeleteDBPromptlyInput',
      'tPDZInfoInput' => 'Defr\\CzechDataBox\\Api\\tPDZInfoInput',
      'tPDZRec' => 'Defr\\CzechDataBox\\Api\\tPDZRec',
      'tPDZRecArray' => 'Defr\\CzechDataBox\\Api\\tPDZRecArray',
      'tPDZInfoOutput' => 'Defr\\CzechDataBox\\Api\\tPDZInfoOutput',
      'tChangeDBsTypeInput' => 'Defr\\CzechDataBox\\Api\\tChangeDBsTypeInput',
      'tChangeDBsTypeOutput' => 'Defr\\CzechDataBox\\Api\\tChangeDBsTypeOutput',
      'tChangeLogRow' => 'Defr\\CzechDataBox\\Api\\tChangeLogRow',
      'tDBCreditInfoInput' => 'Defr\\CzechDataBox\\Api\\tDBCreditInfoInput',
      'tDBCreditInfoOutput' => 'Defr\\CzechDataBox\\Api\\tDBCreditInfoOutput',
      'ciRecords' => 'Defr\\CzechDataBox\\Api\\ciRecords',
      'tCiRecord' => 'Defr\\CzechDataBox\\Api\\tCiRecord',
      'tISDSSearchInput' => 'Defr\\CzechDataBox\\Api\\tISDSSearchInput',
      'tISDSSearchOutput' => 'Defr\\CzechDataBox\\Api\\tISDSSearchOutput',
      'tdbResult' => 'Defr\\CzechDataBox\\Api\\tdbResult',
      'tdbResultsArray' => 'Defr\\CzechDataBox\\Api\\tdbResultsArray',
      'tISDSSearchInput3' => 'Defr\\CzechDataBox\\Api\\tISDSSearchInput3',
      'tISDSSearchOutput2' => 'Defr\\CzechDataBox\\Api\\tISDSSearchOutput2',
      'tdbResult2' => 'Defr\\CzechDataBox\\Api\\tdbResult2',
      'tdbResultsArray2' => 'Defr\\CzechDataBox\\Api\\tdbResultsArray2',
      'tGetDBStatusInput' => 'Defr\\CzechDataBox\\Api\\tGetDBStatusInput',
      'tGetDBStatusOutput' => 'Defr\\CzechDataBox\\Api\\tGetDBStatusOutput',
      'tdbPeriodsArray' => 'Defr\\CzechDataBox\\Api\\tdbPeriodsArray',
      'tdbPeriod' => 'Defr\\CzechDataBox\\Api\\tdbPeriod',
      'tFindPersonalDBInput' => 'Defr\\CzechDataBox\\Api\\tFindPersonalDBInput',
      'tdbPersonalOwnerInfo' => 'Defr\\CzechDataBox\\Api\\tdbPersonalOwnerInfo',
      'tFindPersonalDBOutput' => 'Defr\\CzechDataBox\\Api\\tFindPersonalDBOutput',
      'tdbPersOwnersArray' => 'Defr\\CzechDataBox\\Api\\tdbPersOwnersArray',
      'tDTInfoInput' => 'Defr\\CzechDataBox\\Api\\tDTInfoInput',
      'tDTInfoOutput' => 'Defr\\CzechDataBox\\Api\\tDTInfoOutput',
      'tPDZSendInput' => 'Defr\\CzechDataBox\\Api\\tPDZSendInput',
      'tPDZSendOutput' => 'Defr\\CzechDataBox\\Api\\tPDZSendOutput',
      'GetConstants' => 'Defr\\CzechDataBox\\Api\\GetConstants',
      'tGetConstsOutput' => 'Defr\\CzechDataBox\\Api\\tGetConstsOutput',
      'constRecords' => 'Defr\\CzechDataBox\\Api\\constRecords',
      'tConstRecord' => 'Defr\\CzechDataBox\\Api\\tConstRecord',
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
            $wsdl = '/Users/dennis/sites/CzechDataBox/Resources/db_access.wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param tDummyInput $parameter
     * @return tGetOwnInfoOutput
     */
    public function GetOwnerInfoFromLogin(tDummyInput $parameter)
    {
        return $this->__soapCall('GetOwnerInfoFromLogin', array($parameter));
    }

    /**
     * @param tDummyInput $parameter
     * @return tGetOwnInfoOutput2
     */
    public function GetOwnerInfoFromLogin2(tDummyInput $parameter)
    {
        return $this->__soapCall('GetOwnerInfoFromLogin2', array($parameter));
    }

    /**
     * @param tDummyInput $parameter
     * @return tGetUserInfoOutput
     */
    public function GetUserInfoFromLogin(tDummyInput $parameter)
    {
        return $this->__soapCall('GetUserInfoFromLogin', array($parameter));
    }

    /**
     * @param tDummyInput $parameter
     * @return tGetUserInfoOutput2
     */
    public function GetUserInfoFromLogin2(tDummyInput $parameter)
    {
        return $this->__soapCall('GetUserInfoFromLogin2', array($parameter));
    }

    /**
     * @param tChngPasswInput $parameter
     * @return tReqStatusOutput
     */
    public function ChangeISDSPassword(tChngPasswInput $parameter)
    {
        return $this->__soapCall('ChangeISDSPassword', array($parameter));
    }

    /**
     * @param tDummyInput $parameter
     * @return tGetPasswInfoOutput
     */
    public function GetPasswordInfo(tDummyInput $parameter)
    {
        return $this->__soapCall('GetPasswordInfo', array($parameter));
    }
}
