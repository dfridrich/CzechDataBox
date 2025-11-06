<?php

namespace Defr\CzechDataBox\Api;

class tDbUserInfoExt
{

    /**
     * @var string $pnFirstName
     */
    protected $pnFirstName = null;

    /**
     * @var string $pnMiddleName
     */
    protected $pnMiddleName = null;

    /**
     * @var string $pnLastName
     */
    protected $pnLastName = null;

    /**
     * @var string $pnLastNameAtBirth
     */
    protected $pnLastNameAtBirth = null;

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
     * @var string $adAMCode
     */
    protected $adAMCode = null;

    /**
     * @var date $biDate
     */
    protected $biDate = null;

    /**
     * @var tUserID $userID
     */
    protected $userID = null;

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
     * @param string $pnFirstName
     * @param string $pnMiddleName
     * @param string $pnLastName
     * @param string $pnLastNameAtBirth
     * @param string $adCity
     * @param string $adDistrict
     * @param string $adStreet
     * @param string $adNumberInStreet
     * @param string $adNumberInMunicipality
     * @param string $adZipCode
     * @param string $adState
     * @param string $adAMCode
     * @param date $biDate
     * @param tUserID $userID
     * @param tUserType $userType
     * @param int $userPrivils
     * @param ic $ic
     * @param string $firmName
     * @param string $caStreet
     * @param string $caCity
     * @param string $caZipCode
     * @param string $caState
     */
    public function __construct($pnFirstName = null, $pnMiddleName = null, $pnLastName = null, $pnLastNameAtBirth = null, $adCity = null, $adDistrict = null, $adStreet = null, $adNumberInStreet = null, $adNumberInMunicipality = null, $adZipCode = null, $adState = null, $adAMCode = null, $biDate = null, $userID = null, $userType = null, $userPrivils = null, $ic = null, $firmName = null, $caStreet = null, $caCity = null, $caZipCode = null, $caState = null)
    {
        $this->pnFirstName = $pnFirstName;
        $this->pnMiddleName = $pnMiddleName;
        $this->pnLastName = $pnLastName;
        $this->pnLastNameAtBirth = $pnLastNameAtBirth;
        $this->adCity = $adCity;
        $this->adDistrict = $adDistrict;
        $this->adStreet = $adStreet;
        $this->adNumberInStreet = $adNumberInStreet;
        $this->adNumberInMunicipality = $adNumberInMunicipality;
        $this->adZipCode = $adZipCode;
        $this->adState = $adState;
        $this->adAMCode = $adAMCode;
        $this->biDate = $biDate;
        $this->userID = $userID;
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
     * @return string
     */
    public function getPnFirstName()
    {
        return $this->pnFirstName;
    }

    /**
     * @param string $pnFirstName
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
     */
    public function setPnFirstName($pnFirstName)
    {
        $this->pnFirstName = $pnFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPnMiddleName()
    {
        return $this->pnMiddleName;
    }

    /**
     * @param string $pnMiddleName
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
     */
    public function setPnMiddleName($pnMiddleName)
    {
        $this->pnMiddleName = $pnMiddleName;
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
     */
    public function setPnLastName($pnLastName)
    {
        $this->pnLastName = $pnLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPnLastNameAtBirth()
    {
        return $this->pnLastNameAtBirth;
    }

    /**
     * @param string $pnLastNameAtBirth
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
     */
    public function setPnLastNameAtBirth($pnLastNameAtBirth)
    {
        $this->pnLastNameAtBirth = $pnLastNameAtBirth;
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
     */
    public function setAdState($adState)
    {
        $this->adState = $adState;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdAMCode()
    {
        return $this->adAMCode;
    }

    /**
     * @param string $adAMCode
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
     */
    public function setAdAMCode($adAMCode)
    {
        $this->adAMCode = $adAMCode;
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
     */
    public function setBiDate($biDate)
    {
        $this->biDate = $biDate;
        return $this;
    }

    /**
     * @return tUserID
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param tUserID $userID
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfoExt
     */
    public function setCaState($caState)
    {
        $this->caState = $caState;
        return $this;
    }
}
