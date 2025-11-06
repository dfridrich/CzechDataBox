<?php

namespace Defr\CzechDataBox\Api;

use Defr\CzechDataBox\DataBoxException;

class DataBoxSearch extends \SoapClient
{

    #[\ReturnTypeWillChange]
    public function __doRequest($request, $location, $action, $version, $oneWay = false)
    {
        $response = parent::__doRequest($request, $location, $action, $version, $oneWay);

        if (false !== strpos($response, 'Authentication required!')) {
            throw new DataBoxException('Authentication required, check your credentials.');
        }

        return $response;
    }

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
      'GetDataBoxAddress' => 'Defr\\CzechDataBox\\Api\\GetDataBoxAddress',
      'tGetAddressOutput' => 'Defr\\CzechDataBox\\Api\\tGetAddressOutput',
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
            $wsdl = '/var/www/html/Resources/db_search.wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param tFindDBInput $parameter
     * @return tFindDBOuput
     */
    public function FindDataBox(tFindDBInput $parameter)
    {
        return $this->__soapCall('FindDataBox', array($parameter));
    }

    /**
     * @param tFindDBInput2 $parameter
     * @return tFindDBOuput2
     */
    public function FindDataBox2(tFindDBInput2 $parameter)
    {
        return $this->__soapCall('FindDataBox2', array($parameter));
    }

    /**
     * @param tIdDBInput $parameter
     * @return tCheckDBOutput
     */
    public function CheckDataBox(tIdDBInput $parameter)
    {
        return $this->__soapCall('CheckDataBox', array($parameter));
    }

    /**
     * @param tGetDBListInput $parameter
     * @return tGetDBListOutput
     */
    public function GetDataBoxList(tGetDBListInput $parameter)
    {
        return $this->__soapCall('GetDataBoxList', array($parameter));
    }

    /**
     * @param tPDZInfoInput $parameter
     * @return tPDZInfoOutput
     */
    public function PDZInfo(tPDZInfoInput $parameter)
    {
        return $this->__soapCall('PDZInfo', array($parameter));
    }

    /**
     * @param tDBCreditInfoInput $parameter
     * @return tDBCreditInfoOutput
     */
    public function DataBoxCreditInfo(tDBCreditInfoInput $parameter)
    {
        return $this->__soapCall('DataBoxCreditInfo', array($parameter));
    }

    /**
     * @param tISDSSearchInput $parameter
     * @return tISDSSearchOutput
     */
    public function ISDSSearch2(tISDSSearchInput $parameter)
    {
        return $this->__soapCall('ISDSSearch2', array($parameter));
    }

    /**
     * @param tISDSSearchInput3 $parameter
     * @return tISDSSearchOutput2
     */
    public function ISDSSearch3(tISDSSearchInput3 $parameter)
    {
        return $this->__soapCall('ISDSSearch3', array($parameter));
    }

    /**
     * @param tGetDBStatusInput $parameter
     * @return tGetDBStatusOutput
     */
    public function GetDataBoxActivityStatus(tGetDBStatusInput $parameter)
    {
        return $this->__soapCall('GetDataBoxActivityStatus', array($parameter));
    }

    /**
     * @param tFindPersonalDBInput $parameter
     * @return tFindPersonalDBOutput
     */
    public function FindPersonalDataBox(tFindPersonalDBInput $parameter)
    {
        return $this->__soapCall('FindPersonalDataBox', array($parameter));
    }

    /**
     * @param tDTInfoInput $parameter
     * @return tDTInfoOutput
     */
    public function DTInfo(tDTInfoInput $parameter)
    {
        return $this->__soapCall('DTInfo', array($parameter));
    }

    /**
     * @param tPDZSendInput $parameter
     * @return tPDZSendOutput
     */
    public function PDZSendInfo(tPDZSendInput $parameter)
    {
        return $this->__soapCall('PDZSendInfo', array($parameter));
    }

    /**
     * @param GetConstants $parameter
     * @return tGetConstsOutput
     */
    public function GetConstants(GetConstants $parameter)
    {
        return $this->__soapCall('GetConstants', array($parameter));
    }

    /**
     * @param GetDataBoxAddress $parameter
     * @return tGetAddressOutput
     */
    public function GetDataBoxAddress(GetDataBoxAddress $parameter)
    {
        return $this->__soapCall('GetDataBoxAddress', array($parameter));
    }
}
