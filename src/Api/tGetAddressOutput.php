<?php

namespace Defr\CzechDataBox\Api;

class tGetAddressOutput
{

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
     * @var string $adRegistrationNumber
     */
    protected $adRegistrationNumber = null;

    /**
     * @var string $adFullAddress1
     */
    protected $adFullAddress1 = null;

    /**
     * @var string $adFullAddress2
     */
    protected $adFullAddress2 = null;

    /**
     * @param string $adCode
     * @param string $adCity
     * @param string $adDistrict
     * @param string $adStreet
     * @param string $adNumberInStreet
     * @param string $adNumberInMunicipality
     * @param string $adZipCode
     * @param string $adState
     * @param string $adRegistrationNumber
     * @param string $adFullAddress1
     * @param string $adFullAddress2
     */
    public function __construct($adCode = null, $adCity = null, $adDistrict = null, $adStreet = null, $adNumberInStreet = null, $adNumberInMunicipality = null, $adZipCode = null, $adState = null, $adRegistrationNumber = null, $adFullAddress1 = null, $adFullAddress2 = null)
    {
      $this->adCode = $adCode;
      $this->adCity = $adCity;
      $this->adDistrict = $adDistrict;
      $this->adStreet = $adStreet;
      $this->adNumberInStreet = $adNumberInStreet;
      $this->adNumberInMunicipality = $adNumberInMunicipality;
      $this->adZipCode = $adZipCode;
      $this->adState = $adState;
      $this->adRegistrationNumber = $adRegistrationNumber;
      $this->adFullAddress1 = $adFullAddress1;
      $this->adFullAddress2 = $adFullAddress2;
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
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
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
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
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
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
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
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
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
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
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
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
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
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
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
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
     */
    public function setAdState($adState)
    {
      $this->adState = $adState;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdRegistrationNumber()
    {
      return $this->adRegistrationNumber;
    }

    /**
     * @param string $adRegistrationNumber
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
     */
    public function setAdRegistrationNumber($adRegistrationNumber)
    {
      $this->adRegistrationNumber = $adRegistrationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdFullAddress1()
    {
      return $this->adFullAddress1;
    }

    /**
     * @param string $adFullAddress1
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
     */
    public function setAdFullAddress1($adFullAddress1)
    {
      $this->adFullAddress1 = $adFullAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdFullAddress2()
    {
      return $this->adFullAddress2;
    }

    /**
     * @param string $adFullAddress2
     * @return \Defr\CzechDataBox\Api\tGetAddressOutput
     */
    public function setAdFullAddress2($adFullAddress2)
    {
      $this->adFullAddress2 = $adFullAddress2;
      return $this;
    }

}
