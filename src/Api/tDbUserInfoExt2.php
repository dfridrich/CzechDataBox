<?php

namespace Defr\CzechDataBox\Api;

class tDbUserInfoExt2
{

    /**
     * @var boolean $aifoIsds
     */
    protected $aifoIsds = null;

    /**
     * @var string $pnGivenNames
     */
    protected $pnGivenNames = null;

    /**
     * @var string $pnLastName
     */
    protected $pnLastName = null;

    /**
     * @var string $adCode
     */
    protected $adCode = null;

    /**
     * @var string $adCity
     */
    protected $adCity = null;

    /**
     * @var string $adDistrict
     */
    protected $adDistrict = null;

    /**
     * @var string $adStreet
     */
    protected $adStreet = null;

    /**
     * @var string $adNumberInStreet
     */
    protected $adNumberInStreet = null;

    /**
     * @var string $adNumberInMunicipality
     */
    protected $adNumberInMunicipality = null;

    /**
     * @var string $adZipCode
     */
    protected $adZipCode = null;

    /**
     * @var string $adState
     */
    protected $adState = null;

    /**
     * @var date $biDate
     */
    protected $biDate = null;

    /**
     * @var string $isdsID
     */
    protected $isdsID = null;

    /**
     * @var tUserType $userType
     */
    protected $userType = null;

    /**
     * @var int $userPrivils
     */
    protected $userPrivils = null;

    /**
     * @var ic $ic
     */
    protected $ic = null;

    /**
     * @var string $firmName
     */
    protected $firmName = null;

    /**
     * @var string $caStreet
     */
    protected $caStreet = null;

    /**
     * @var string $caCity
     */
    protected $caCity = null;

    /**
     * @var string $caZipCode
     */
    protected $caZipCode = null;

    /**
     * @var string $caState
     */
    protected $caState = null;

    /**
     * @param boolean $aifoIsds
     * @param string $pnGivenNames
     * @param string $pnLastName
     * @param string $adCode
     * @param string $adCity
     * @param string $adDistrict
     * @param string $adStreet
     * @param string $adNumberInStreet
     * @param string $adNumberInMunicipality
     * @param string $adZipCode
     * @param string $adState
     * @param date $biDate
     * @param string $isdsID
     * @param tUserType $userType
     * @param int $userPrivils
     * @param ic $ic
     * @param string $firmName
     * @param string $caStreet
     * @param string $caCity
     * @param string $caZipCode
     * @param string $caState
     */
    public function __construct($aifoIsds = null, $pnGivenNames = null, $pnLastName = null, $adCode = null, $adCity = null, $adDistrict = null, $adStreet = null, $adNumberInStreet = null, $adNumberInMunicipality = null, $adZipCode = null, $adState = null, $biDate = null, $isdsID = null, $userType = null, $userPrivils = null, $ic = null, $firmName = null, $caStreet = null, $caCity = null, $caZipCode = null, $caState = null)
    {
        $this->aifoIsds = $aifoIsds;
        $this->pnGivenNames = $pnGivenNames;
        $this->pnLastName = $pnLastName;
        $this->adCode = $adCode;
        $this->adCity = $adCity;
        $this->adDistrict = $adDistrict;
        $this->adStreet = $adStreet;
        $this->adNumberInStreet = $adNumberInStreet;
        $this->adNumberInMunicipality = $adNumberInMunicipality;
        $this->adZipCode = $adZipCode;
        $this->adState = $adState;
        $this->biDate = $biDate;
        $this->isdsID = $isdsID;
        $this->userType = $userType;
        $this->userPrivils = $userPrivils;
        $this->ic = $ic;
        $this->firmName = $firmName;
        $this->caStreet = $caStreet;
        $this->caCity = $caCity;
        $this->caZipCode = $caZipCode;
        $this->caState = $caState;
    }

    /**
     * @return boolean
     */
    public function getAifoIsds()
    {
        return $this->aifoIsds;
    }

    /**
     * @param boolean $aifoIsds
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setAifoIsds($aifoIsds)
    {
        $this->aifoIsds = $aifoIsds;
        return $this;
    }

    /**
     * @return string
     */
    public function getPnGivenNames()
    {
        return $this->pnGivenNames;
    }

    /**
     * @param string $pnGivenNames
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setPnGivenNames($pnGivenNames)
    {
        $this->pnGivenNames = $pnGivenNames;
        return $this;
    }

    /**
     * @return string
     */
    public function getPnLastName()
    {
        return $this->pnLastName;
    }

    /**
     * @param string $pnLastName
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setPnLastName($pnLastName)
    {
        $this->pnLastName = $pnLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdCode()
    {
        return $this->adCode;
    }

    /**
     * @param string $adCode
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setAdCode($adCode)
    {
        $this->adCode = $adCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdCity()
    {
        return $this->adCity;
    }

    /**
     * @param string $adCity
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setAdCity($adCity)
    {
        $this->adCity = $adCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdDistrict()
    {
        return $this->adDistrict;
    }

    /**
     * @param string $adDistrict
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setAdDistrict($adDistrict)
    {
        $this->adDistrict = $adDistrict;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdStreet()
    {
        return $this->adStreet;
    }

    /**
     * @param string $adStreet
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setAdStreet($adStreet)
    {
        $this->adStreet = $adStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdNumberInStreet()
    {
        return $this->adNumberInStreet;
    }

    /**
     * @param string $adNumberInStreet
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setAdNumberInStreet($adNumberInStreet)
    {
        $this->adNumberInStreet = $adNumberInStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdNumberInMunicipality()
    {
        return $this->adNumberInMunicipality;
    }

    /**
     * @param string $adNumberInMunicipality
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setAdNumberInMunicipality($adNumberInMunicipality)
    {
        $this->adNumberInMunicipality = $adNumberInMunicipality;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdZipCode()
    {
        return $this->adZipCode;
    }

    /**
     * @param string $adZipCode
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setAdZipCode($adZipCode)
    {
        $this->adZipCode = $adZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdState()
    {
        return $this->adState;
    }

    /**
     * @param string $adState
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setAdState($adState)
    {
        $this->adState = $adState;
        return $this;
    }

    /**
     * @return date
     */
    public function getBiDate()
    {
        return $this->biDate;
    }

    /**
     * @param date $biDate
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setBiDate($biDate)
    {
        $this->biDate = $biDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsdsID()
    {
        return $this->isdsID;
    }

    /**
     * @param string $isdsID
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setIsdsID($isdsID)
    {
        $this->isdsID = $isdsID;
        return $this;
    }

    /**
     * @return tUserType
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param tUserType $userType
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserPrivils()
    {
        return $this->userPrivils;
    }

    /**
     * @param int $userPrivils
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setUserPrivils($userPrivils)
    {
        $this->userPrivils = $userPrivils;
        return $this;
    }

    /**
     * @return ic
     */
    public function getIc()
    {
        return $this->ic;
    }

    /**
     * @param ic $ic
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setIc($ic)
    {
        $this->ic = $ic;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirmName()
    {
        return $this->firmName;
    }

    /**
     * @param string $firmName
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setFirmName($firmName)
    {
        $this->firmName = $firmName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaStreet()
    {
        return $this->caStreet;
    }

    /**
     * @param string $caStreet
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setCaStreet($caStreet)
    {
        $this->caStreet = $caStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaCity()
    {
        return $this->caCity;
    }

    /**
     * @param string $caCity
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setCaCity($caCity)
    {
        $this->caCity = $caCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaZipCode()
    {
        return $this->caZipCode;
    }

    /**
     * @param string $caZipCode
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setCaZipCode($caZipCode)
    {
        $this->caZipCode = $caZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaState()
    {
        return $this->caState;
    }

    /**
     * @param string $caState
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt2
     */
    public function setCaState($caState)
    {
        $this->caState = $caState;
        return $this;
    }
}
