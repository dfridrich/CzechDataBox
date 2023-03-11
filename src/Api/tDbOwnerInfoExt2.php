<?php

namespace Defr\CzechDataBox\Api;

class tDbOwnerInfoExt2
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

    /**
     * @var boolean $aifoIsds
     */
    protected $aifoIsds = null;

    /**
     * @var tDbType $dbType
     */
    protected $dbType = null;

    /**
     * @var tIdentificationNumber $ic
     */
    protected $ic = null;

    /**
     * @var string $pnGivenNames
     */
    protected $pnGivenNames = null;

    /**
     * @var string $pnLastName
     */
    protected $pnLastName = null;

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
     * @var string $nationality
     */
    protected $nationality = null;

    /**
     * @var string $dbIdOVM
     */
    protected $dbIdOVM = null;

    /**
     * @var int $dbState
     */
    protected $dbState = null;

    /**
     * @var boolean $dbOpenAddressing
     */
    protected $dbOpenAddressing = null;

    /**
     * @var tIdDb $dbUpperID
     */
    protected $dbUpperID = null;

    /**
     * @param tIdDb $dbID
     * @param boolean $aifoIsds
     * @param tDbType $dbType
     * @param tIdentificationNumber $ic
     * @param string $pnGivenNames
     * @param string $pnLastName
     * @param string $firmName
     * @param date $biDate
     * @param string $biCity
     * @param string $biCounty
     * @param string $biState
     * @param string $adCode
     * @param string $adCity
     * @param string $adDistrict
     * @param string $adStreet
     * @param string $adNumberInStreet
     * @param string $adNumberInMunicipality
     * @param string $adZipCode
     * @param string $adState
     * @param string $nationality
     * @param string $dbIdOVM
     * @param int $dbState
     * @param boolean $dbOpenAddressing
     * @param tIdDb $dbUpperID
     */
    public function __construct($dbID = null, $aifoIsds = null, $dbType = null, $ic = null, $pnGivenNames = null, $pnLastName = null, $firmName = null, $biDate = null, $biCity = null, $biCounty = null, $biState = null, $adCode = null, $adCity = null, $adDistrict = null, $adStreet = null, $adNumberInStreet = null, $adNumberInMunicipality = null, $adZipCode = null, $adState = null, $nationality = null, $dbIdOVM = null, $dbState = null, $dbOpenAddressing = null, $dbUpperID = null)
    {
        $this->dbID = $dbID;
        $this->aifoIsds = $aifoIsds;
        $this->dbType = $dbType;
        $this->ic = $ic;
        $this->pnGivenNames = $pnGivenNames;
        $this->pnLastName = $pnLastName;
        $this->firmName = $firmName;
        $this->biDate = $biDate;
        $this->biCity = $biCity;
        $this->biCounty = $biCounty;
        $this->biState = $biState;
        $this->adCode = $adCode;
        $this->adCity = $adCity;
        $this->adDistrict = $adDistrict;
        $this->adStreet = $adStreet;
        $this->adNumberInStreet = $adNumberInStreet;
        $this->adNumberInMunicipality = $adNumberInMunicipality;
        $this->adZipCode = $adZipCode;
        $this->adState = $adState;
        $this->nationality = $nationality;
        $this->dbIdOVM = $dbIdOVM;
        $this->dbState = $dbState;
        $this->dbOpenAddressing = $dbOpenAddressing;
        $this->dbUpperID = $dbUpperID;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setAifoIsds($aifoIsds)
    {
        $this->aifoIsds = $aifoIsds;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setIc($ic)
    {
        $this->ic = $ic;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setPnLastName($pnLastName)
    {
        $this->pnLastName = $pnLastName;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setBiState($biState)
    {
        $this->biState = $biState;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }


    /**
     * @return string
     */
    public function getDbIdOVM()
    {
        return $this->dbIdOVM;
    }


    /**
     * @param string $dbIdOVM
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setDbIdOVM($dbIdOVM)
    {
        $this->dbIdOVM = $dbIdOVM;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setDbState($dbState)
    {
        $this->dbState = $dbState;
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
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setDbOpenAddressing($dbOpenAddressing)
    {
        $this->dbOpenAddressing = $dbOpenAddressing;
        return $this;
    }


    /**
     * @return tIdDb
     */
    public function getDbUpperID()
    {
        return $this->dbUpperID;
    }


    /**
     * @param tIdDb $dbUpperID
     * @return \Defr\CzechDataBox\Api\tDbOwnerInfoExt2
     */
    public function setDbUpperID($dbUpperID)
    {
        $this->dbUpperID = $dbUpperID;
        return $this;
    }

}
