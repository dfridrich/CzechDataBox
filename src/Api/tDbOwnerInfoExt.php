<?php

namespace Defr\CzechDataBox\Api;

class tDbOwnerInfoExt
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

    /**
     * @var tDbType $dbType
     */
    protected $dbType = null;

    /**
     * @var tIdentificationNumber $ic
     */
    protected $ic = null;

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
     * @var string $firmName
     */
    protected $firmName = null;

    /**
     * @var date $biDate
     */
    protected $biDate = null;

    /**
     * @var string $biCity
     */
    protected $biCity = null;

    /**
     * @var string $biCounty
     */
    protected $biCounty = null;

    /**
     * @var string $biState
     */
    protected $biState = null;

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
     * @var string $nationality
     */
    protected $nationality = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $telNumber
     */
    protected $telNumber = null;

    /**
     * @var string $identifier
     */
    protected $identifier = null;

    /**
     * @var string $registryCode
     */
    protected $registryCode = null;

    /**
     * @var int $dbState
     */
    protected $dbState = null;

    /**
     * @var boolean $dbEffectiveOVM
     */
    protected $dbEffectiveOVM = null;

    /**
     * @var boolean $dbOpenAddressing
     */
    protected $dbOpenAddressing = null;

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
     * @param string $adDistrict
     * @param string $adStreet
     * @param string $adNumberInStreet
     * @param string $adNumberInMunicipality
     * @param string $adZipCode
     * @param string $adState
     * @param string $adAMCode
     * @param string $nationality
     * @param string $email
     * @param string $telNumber
     * @param string $identifier
     * @param string $registryCode
     * @param int $dbState
     * @param boolean $dbEffectiveOVM
     * @param boolean $dbOpenAddressing
     */
    public function __construct($dbID = null, $dbType = null, $ic = null, $pnFirstName = null, $pnMiddleName = null, $pnLastName = null, $pnLastNameAtBirth = null, $firmName = null, $biDate = null, $biCity = null, $biCounty = null, $biState = null, $adCity = null, $adDistrict = null, $adStreet = null, $adNumberInStreet = null, $adNumberInMunicipality = null, $adZipCode = null, $adState = null, $adAMCode = null, $nationality = null, $email = null, $telNumber = null, $identifier = null, $registryCode = null, $dbState = null, $dbEffectiveOVM = null, $dbOpenAddressing = null)
    {
      $this->dbID = $dbID;
      $this->dbType = $dbType;
      $this->ic = $ic;
      $this->pnFirstName = $pnFirstName;
      $this->pnMiddleName = $pnMiddleName;
      $this->pnLastName = $pnLastName;
      $this->pnLastNameAtBirth = $pnLastNameAtBirth;
      $this->firmName = $firmName;
      $this->biDate = $biDate;
      $this->biCity = $biCity;
      $this->biCounty = $biCounty;
      $this->biState = $biState;
      $this->adCity = $adCity;
      $this->adDistrict = $adDistrict;
      $this->adStreet = $adStreet;
      $this->adNumberInStreet = $adNumberInStreet;
      $this->adNumberInMunicipality = $adNumberInMunicipality;
      $this->adZipCode = $adZipCode;
      $this->adState = $adState;
      $this->adAMCode = $adAMCode;
      $this->nationality = $nationality;
      $this->email = $email;
      $this->telNumber = $telNumber;
      $this->identifier = $identifier;
      $this->registryCode = $registryCode;
      $this->dbState = $dbState;
      $this->dbEffectiveOVM = $dbEffectiveOVM;
      $this->dbOpenAddressing = $dbOpenAddressing;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
     */
    public function setAdAMCode($adAMCode)
    {
      $this->adAMCode = $adAMCode;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
     */
    public function setTelNumber($telNumber)
    {
      $this->telNumber = $telNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
      return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
     */
    public function setIdentifier($identifier)
    {
      $this->identifier = $identifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistryCode()
    {
      return $this->registryCode;
    }

    /**
     * @param string $registryCode
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt
     */
    public function setDbOpenAddressing($dbOpenAddressing)
    {
      $this->dbOpenAddressing = $dbOpenAddressing;
      return $this;
    }

}
