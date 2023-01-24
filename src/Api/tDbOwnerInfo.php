<?php

namespace Defr\CzechDataBox\Api;

class tDbOwnerInfo
{

    protected tIdDb $dbID = null;

    protected tIdentificationNumber $ic = null;

    protected date $biDate = null;

    protected identifier $identifier = null;

    protected registryCode $registryCode = null;

    /**
     * @param tIdDb $dbID
     * @param tDbType $dbType
     * @param tIdentificationNumber $ic
     * @param string $pnFirstName
     * @param string $pnMiddleName
     * @param string $pnLastName
     * @param string $pnLastNameAtBirth
     * @param string $firmName
     * @param date $biDate
     * @param string $biCity
     * @param string $biCounty
     * @param string $biState
     * @param string $adCity
     * @param string $adStreet
     * @param string $adNumberInStreet
     * @param string $adNumberInMunicipality
     * @param string $adZipCode
     * @param string $adState
     * @param string $nationality
     * @param string $email
     * @param string $telNumber
     * @param identifier $identifier
     * @param registryCode $registryCode
     * @param int $dbState
     * @param boolean $dbEffectiveOVM
     * @param boolean $dbOpenAddressing
     */
    public function __construct($dbID = null, protected $dbType = null, $ic = null, protected $pnFirstName = null, protected $pnMiddleName = null, protected $pnLastName = null, protected $pnLastNameAtBirth = null, protected $firmName = null, $biDate = null, protected $biCity = null, protected $biCounty = null, protected $biState = null, protected $adCity = null, protected $adStreet = null, protected $adNumberInStreet = null, protected $adNumberInMunicipality = null, protected $adZipCode = null, protected $adState = null, protected $nationality = null, protected $email = null, protected $telNumber = null, $identifier = null, $registryCode = null, protected $dbState = null, protected $dbEffectiveOVM = null, protected $dbOpenAddressing = null)
    {
        $this->dbID = $dbID;
        $this->ic = $ic;
        $this->biDate = $biDate;
        $this->identifier = $identifier;
        $this->registryCode = $registryCode;
    }


    /**
     * @return tIdDb
     */
    public function getDbID()
    {
        return $this->dbID;
    }


    /**
     * @param tIdDb $dbID
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }


    /**
     * @return tDbType
     */
    public function getDbType()
    {
        return $this->dbType;
    }


    /**
     * @param tDbType $dbType
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setDbType($dbType)
    {
        $this->dbType = $dbType;
        return $this;
    }


    /**
     * @return tIdentificationNumber
     */
    public function getIc()
    {
        return $this->ic;
    }


    /**
     * @param tIdentificationNumber $ic
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setIc($ic)
    {
        $this->ic = $ic;
        return $this;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setPnLastNameAtBirth($pnLastNameAtBirth)
    {
        $this->pnLastNameAtBirth = $pnLastNameAtBirth;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setFirmName($firmName)
    {
        $this->firmName = $firmName;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setBiDate($biDate)
    {
        $this->biDate = $biDate;
        return $this;
    }


    /**
     * @return string
     */
    public function getBiCity()
    {
        return $this->biCity;
    }


    /**
     * @param string $biCity
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setBiCity($biCity)
    {
        $this->biCity = $biCity;
        return $this;
    }


    /**
     * @return string
     */
    public function getBiCounty()
    {
        return $this->biCounty;
    }


    /**
     * @param string $biCounty
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setBiCounty($biCounty)
    {
        $this->biCounty = $biCounty;
        return $this;
    }


    /**
     * @return string
     */
    public function getBiState()
    {
        return $this->biState;
    }


    /**
     * @param string $biState
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setBiState($biState)
    {
        $this->biState = $biState;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setAdState($adState)
    {
        $this->adState = $adState;
        return $this;
    }


    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }


    /**
     * @param string $nationality
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }


    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @param string $email
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


    /**
     * @return string
     */
    public function getTelNumber()
    {
        return $this->telNumber;
    }


    /**
     * @param string $telNumber
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setTelNumber($telNumber)
    {
        $this->telNumber = $telNumber;
        return $this;
    }


    /**
     * @return identifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * @param identifier $identifier
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }


    /**
     * @return registryCode
     */
    public function getRegistryCode()
    {
        return $this->registryCode;
    }


    /**
     * @param registryCode $registryCode
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setRegistryCode($registryCode)
    {
        $this->registryCode = $registryCode;
        return $this;
    }


    /**
     * @return int
     */
    public function getDbState()
    {
        return $this->dbState;
    }


    /**
     * @param int $dbState
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setDbState($dbState)
    {
        $this->dbState = $dbState;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDbEffectiveOVM()
    {
        return $this->dbEffectiveOVM;
    }


    /**
     * @param boolean $dbEffectiveOVM
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setDbEffectiveOVM($dbEffectiveOVM)
    {
        $this->dbEffectiveOVM = $dbEffectiveOVM;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDbOpenAddressing()
    {
        return $this->dbOpenAddressing;
    }


    /**
     * @param boolean $dbOpenAddressing
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfo
     */
    public function setDbOpenAddressing($dbOpenAddressing)
    {
        $this->dbOpenAddressing = $dbOpenAddressing;
        return $this;
    }

}
