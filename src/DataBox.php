<?php

namespace Defr\CzechDataBox;

use Defr\CzechDataBox\Api\DataBoxAccess;
use Defr\CzechDataBox\Api\DataBoxSearch;
use Defr\CzechDataBox\Api\DmInfoWebService;
use Defr\CzechDataBox\Api\DmOperationsWebService;
use Defr\CzechDataBox\Api\IsdsStat;

/**
 * Class DataBox.
 */
class DataBox
{
    /**
     * true = Ostrá verze, produkce
     * false = Testovací rozhraní datových schránek.
     *
     * @var bool
     */
    protected $productionMode = true;

    /**
     * 0 = Heslo
     * 1 = Certifikát (zatim neni dodelano).
     *
     * @var int
     */
    protected $loginType;

    protected $serviceUrl;

    protected $loginName;
    protected $password;

    protected $certFileName = null;
    protected $passPhrase = null;

    protected $proxyAddress = null;
    protected $proxyPort = null;
    protected $proxyLogin = null;
    protected $proxyPassword = null;

    protected $actualWsdl;
    protected $actualOptions;

    /**
     * @var \SoapClient
     */
    protected $actualSoap;

    /**
     * @var string Adresář pro ukládání datových zpráv
     */
    protected $directory;

    /**
     * @var DataBoxSimpleApi
     */
    protected $simpleApi;

    /**
     * @param null $directory
     */
    public function __construct($directory = null)
    {
        if ($directory === null) {
            $this->directory = sys_get_temp_dir() . '/DataBox';
        }
        $this->simpleApi = new DataBoxSimpleApi($this);
    }

    /**
     * Zapne testovaci mod.
     *
     * @return $this
     */
    public function setTestMode()
    {
        $this->productionMode = false;

        return $this;
    }

    /**
     * Vypne testovaci mod a zapne produkci.
     *
     * @return $this
     */
    public function setProductionMode()
    {
        $this->productionMode = true;

        return $this;
    }

    /**
     * Prihlaseni do DS pomoci loginu a hesla.
     * Tato medota neudela prihlaseni, ale do instance tridy ulozi potrebne informace.
     *
     * @param $loginName
     * @param $password
     * @param bool|true $productionMode
     *
     * @return $this
     */
    public function loginWithUsernameAndPassword($loginName, $password, $productionMode = true)
    {
        $this->productionMode = $productionMode;
        $this->loginType = 0;
        $this->loginName = $loginName;
        $this->password = $password;

        return $this;
    }

    /**
     * Vyzkousi spojeni s ISDS.
     *
     * @return bool
     * @throws DataBoxException
     */
    public function testConnection()
    {
        try {
            $this->simpleApi->getStats();
        } catch (\Exception $e) {
            throw new DataBoxException('Can\'t connect to service.');
        }

        return true;
    }

    /**
     * Sestavi URL pro danou WS (WebService).
     *
     * @param $serviceType
     *
     * @return string
     */
    private function getServiceURL($serviceType)
    {
        $res = 'https://ws1';
        if ($this->loginType > 0) {
            $res = $res . 'c';
        }

        switch ($this->productionMode) {
            case 0:
                $res = $res . '.czebox.cz/';
                break;
            case 1:
                $res = $res . '.mojedatovaschranka.cz/';
                break;
        }

//        switch ($this->loginType) {
//            case 1:
//                $res = $res . 'cert/';
//                break;
//            case 2:
//                $res = $res . 'hspis/';
//                break;
//            case 2:
//                $res = $res . 'certds/';
//                break;
//        }

        $res = $res . 'DS/';

        switch ($serviceType) {
            case DataBoxHelper::OPERATIONS_WS:
                $res = $res . 'dz';
                break;
            case DataBoxHelper::INFO_WS:
                $res = $res . 'dx';
                break;
            case DataBoxHelper::SEARCH_WS:
                $res = $res . 'df';
                break;
            case DataBoxHelper::ACCESS_WS:
                $res = $res . 'DsManage';
                break;
            case DataBoxHelper::STAT_WS:
                $res = $res . 'DsManage';
                break;
        }

        $this->serviceUrl = $res;

        return $res;
    }

    /**
     * Vrati WSDL soubor pro dany typ WS.
     *
     * @param $serviceType
     *
     * @return string
     *
     * @throws DataBoxException
     */
    private function getServiceWSDL($serviceType)
    {
        $directory = __DIR__ . '/../Resources/';

        switch ($serviceType) {
            case DataBoxHelper::OPERATIONS_WS:
                return $directory . 'dm_operations.wsdl';
                break;
            case DataBoxHelper::INFO_WS:
                return $directory . 'dm_info.wsdl';
                break;
            case DataBoxHelper::SEARCH_WS:
                return $directory . 'db_search.wsdl';
                break;
            case DataBoxHelper::ACCESS_WS:
                return $directory . 'db_access.wsdl';
                break;
            case DataBoxHelper::STAT_WS:
                return $directory . 'isds_stat.wsdl';
                break;
            default:
                throw new DataBoxException(sprintf('Service type %s not implemented.', $serviceType));
                break;
        }
    }

    /**
     * @param $service
     *
     * @return array
     */
    private function getSoapOptions($service)
    {
        return [
            'login'          => $this->loginName,
            'password'       => $this->password,
            'proxy_host'     => $this->proxyAddress,
            'proxy_port'     => $this->proxyPort,
            'proxy_login'    => $this->proxyLogin,
            'proxy_password' => $this->proxyPassword,
            'location'       => $this->getServiceURL($service),
            //            'cache_wsdl'     => WSDL_CACHE_NONE
        ];
    }

    /**
     * @param $service
     *
     * @throws DataBoxException
     */
    private function setActualService($service)
    {
        $this->actualWsdl = $this->getServiceWSDL($service);
        $this->actualOptions = $this->getSoapOptions($service);
    }

    /**
     * @return DmOperationsWebService
     */
    public function DmOperationsWebService()
    {
        $this->setActualService(DataBoxHelper::OPERATIONS_WS);
        $soap = new DmOperationsWebService($this->actualOptions, $this->actualWsdl);
        $this->actualSoap = $soap;

        return $soap;
    }

    /**
     * @return DmInfoWebService
     */
    public function DmInfoWebService()
    {
        $this->setActualService(DataBoxHelper::INFO_WS);
        $soap = new DmInfoWebService($this->actualOptions, $this->actualWsdl);
        $this->actualSoap = $soap;

        return $soap;
    }

    /**
     * @return DataBoxSearch
     */
    public function DataBoxSearch()
    {
        $this->setActualService(DataBoxHelper::SEARCH_WS);
        $soap = new DataBoxSearch($this->actualOptions, $this->actualWsdl);
        $this->actualSoap = $soap;

        return $soap;
    }

    /**
     * @return DataBoxAccess
     */
    public function DataBoxAccess()
    {
        $this->setActualService(DataBoxHelper::ACCESS_WS);
        $soap = new DataBoxAccess($this->actualOptions, $this->actualWsdl);
        $this->actualSoap = $soap;

        return $soap;
    }

    /**
     * @return IsdsStat
     */
    public function IsdsStat()
    {
        $this->setActualService(DataBoxHelper::STAT_WS);
        $soap = new IsdsStat($this->actualOptions, $this->actualWsdl);
        $this->actualSoap = $soap;

        return $soap;
    }

    /**
     * @return DataBoxSimpleApi
     */
    public function getSimpleApi()
    {
        return $this->simpleApi;
    }

    /**
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }
}
