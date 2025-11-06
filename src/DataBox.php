<?php

namespace Defr\CzechDataBox;

use Defr\CzechDataBox\Api\DataBoxAccess;
use Defr\CzechDataBox\Api\DataBoxSearch;
use Defr\CzechDataBox\Api\DmInfoWebService;
use Defr\CzechDataBox\Api\DmOperationsWebService;
use Defr\CzechDataBox\Api\IsdsStat;
use Exception;
use SoapClient;
use function sprintf;
use function sys_get_temp_dir;

/**
 * Class DataBox.
 */
class DataBox
{
    /**
     * true = Ostrá verze, produkce
     * false = Testovací rozhraní datových schránek.
     *
     */
    protected bool $productionMode = true;

    /**
     * 0 = Heslo
     * 1 = Certifikát
     *
     */
    protected int $loginType;

    protected $serviceUrl;

    protected $loginName;

    protected $password;

    protected $certFileName;

    protected $passPhrase;

    protected $proxyAddress;

    protected $proxyPort;

    protected $proxyLogin;

    protected $proxyPassword;

    protected $actualWsdl;

    protected $actualOptions;

    protected SoapClient $actualSoap;

    /**
     * @var string Adresář pro ukládání datových zpráv
     */
    protected string $directory;

    protected DataBoxSimpleApi $simpleApi;

    /**
     * @param null $directory
     */
    public function __construct($directory = null)
    {
        $this->directory = $directory ?: sys_get_temp_dir().'/DataBox';
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
     * Prihlaseni do DS pomoci certifikatu a hesla (neni povinne).
     * Tato medota neudela prihlaseni, ale do instance tridy ulozi potrebne informace.
     *
     * @param $certificate Cesta k CER souboru
     * @param $password
     * @param bool|true $productionMode
     *
     * @return $this
     */
    public function loginWithCertificateAndPassword($certFileName, $password, $productionMode = true)
    {
        $this->productionMode = $productionMode;
        $this->loginType = 1;
        $this->certFileName = $certFileName;
        $this->password = $password;

        return $this;
    }


    /**
     * Vyzkousi spojeni s ISDS.
     *
     * @throws DataBoxException
     */
    public function testConnection(): bool
    {
        try {
            $this->simpleApi->getStats();
        } catch (Exception $exception) {
            throw new DataBoxException("Can't connect to service.");
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
        if (0 !== $this->loginType) {
            $res .= 'c';
        }

        if ($this->productionMode == 0) {
            $res .= '.czebox.cz/';
        } elseif ($this->productionMode == 1) {
            $res .= '.mojedatovaschranka.cz/';
        }

        if ($this->loginType === 1) {
            $res .= 'cert/';
        }

        $res .= 'DS/';

        switch ($serviceType) {
            case DataBoxHelper::OPERATIONS_WS:
                $res .= 'dz';
                break;
            case DataBoxHelper::INFO_WS:
                $res .= 'dx';
                break;
            case DataBoxHelper::SEARCH_WS:
                $res .= 'df';
                break;
            case DataBoxHelper::ACCESS_WS:
            case DataBoxHelper::STAT_WS:
                $res .= 'DsManage';
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
        $directory = __DIR__.'/../Resources/';

        switch ($serviceType) {
            case DataBoxHelper::OPERATIONS_WS:
                return $directory.'dm_operations.wsdl';
            case DataBoxHelper::INFO_WS:
                return $directory.'dm_info.wsdl';
            case DataBoxHelper::SEARCH_WS:
                return $directory.'db_search.wsdl';
            case DataBoxHelper::ACCESS_WS:
                return $directory.'db_access.wsdl';
            case DataBoxHelper::STAT_WS:
                return $directory.'isds_stat.wsdl';
            default:
                throw new DataBoxException(sprintf('Service type %s not implemented.', $serviceType));
        }
    }


    /**
     * @param $service
     *
     * @return array
     */
    public function getSoapOptions($service)
    {
        return [
            'login'          => $this->loginName,
            'local_cert'     => $this->certFileName,
            'password'       => $this->password,
            'proxy_host'     => $this->proxyAddress,
            'proxy_port'     => $this->proxyPort,
            'proxy_login'    => $this->proxyLogin,
            'proxy_password' => $this->proxyPassword,
            'location'       => $this->getServiceURL($service),
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
