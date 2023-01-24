<?php

namespace Defr\CzechDataBox\Api;

class tDbUserInfo
{

    protected date $biDate = null;

    protected tUserID $userID = null;

    protected ic $ic = null;

    protected firmName $firmName = null;

    /**
     * @param string $pnFirstName
     * @param string $pnMiddleName
     * @param string $pnLastName
     * @param string $pnLastNameAtBirth
     * @param string $adCity
     * @param string $adStreet
     * @param string $adNumberInStreet
     * @param string $adNumberInMunicipality
     * @param string $adZipCode
     * @param string $adState
     * @param date $biDate
     * @param tUserID $userID
     * @param tUserType $userType
     * @param int $userPrivils
     * @param ic $ic
     * @param firmName $firmName
     * @param string $caStreet
     * @param string $caCity
     * @param string $caZipCode
     * @param string $caState
     */
    public function __construct(protected $pnFirstName = null, protected $pnMiddleName = null, protected $pnLastName = null, protected $pnLastNameAtBirth = null, protected $adCity = null, protected $adStreet = null, protected $adNumberInStreet = null, protected $adNumberInMunicipality = null, protected $adZipCode = null, protected $adState = null, $biDate = null, $userID = null, protected $userType = null, protected $userPrivils = null, $ic = null, $firmName = null, protected $caStreet = null, protected $caCity = null, protected $caZipCode = null, protected $caState = null)
    {
        $this->biDate = $biDate;
        $this->userID = $userID;
        $this->ic = $ic;
        $this->firmName = $firmName;
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
     */
    public function setAdCity($adCity)
    {
        $this->adCity = $adCity;
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
     */
    public function setIc($ic)
    {
        $this->ic = $ic;
        return $this;
    }


    /**
     * @return firmName
     */
    public function getFirmName()
    {
        return $this->firmName;
    }


    /**
     * @param firmName $firmName
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
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
     * @return \Defr\CzechDataBox\Api\tDbUserInfo
     */
    public function setCaState($caState)
    {
        $this->caState = $caState;
        return $this;
    }

}
