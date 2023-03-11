<?php

namespace Defr\CzechDataBox\Api;

class tdbPersonalOwnerInfo
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
     * @var int $adCode
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
     * @param tIdDb $dbID
     * @param boolean $aifoIsds
     * @param string $pnFirstName
     * @param string $pnMiddleName
     * @param string $pnLastName
     * @param date $biDate
     * @param string $biCity
     * @param string $biCounty
     * @param string $biState
     * @param int $adCode
     * @param string $adCity
     * @param string $adDistrict
     * @param string $adStreet
     * @param string $adNumberInStreet
     * @param string $adNumberInMunicipality
     * @param string $adZipCode
     * @param string $adState
     * @param string $nationality
     */
    public function __construct($dbID = null, $aifoIsds = null, $pnFirstName = null, $pnMiddleName = null, $pnLastName = null, $biDate = null, $biCity = null, $biCounty = null, $biState = null, $adCode = null, $adCity = null, $adDistrict = null, $adStreet = null, $adNumberInStreet = null, $adNumberInMunicipality = null, $adZipCode = null, $adState = null, $nationality = null)
    {
        $this->dbID = $dbID;
        $this->aifoIsds = $aifoIsds;
        $this->pnFirstName = $pnFirstName;
        $this->pnMiddleName = $pnMiddleName;
        $this->pnLastName = $pnLastName;
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
     */
    public function setAifoIsds($aifoIsds)
    {
        $this->aifoIsds = $aifoIsds;
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
     */
    public function setPnLastName($pnLastName)
    {
        $this->pnLastName = $pnLastName;
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
     */
    public function setBiState($biState)
    {
        $this->biState = $biState;
        return $this;
    }


    /**
     * @return int
     */
    public function getAdCode()
    {
        return $this->adCode;
    }


    /**
     * @param int $adCode
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
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
     * @return \Defr\CzechDataBox\Api\tdbPersonalOwnerInfo
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }

}
