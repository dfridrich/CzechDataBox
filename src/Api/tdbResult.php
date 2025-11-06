<?php

namespace Defr\CzechDataBox\Api;

class tdbResult
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
     * @var string $dbName
     */
    protected $dbName = null;

    /**
     * @var string $dbAddress
     */
    protected $dbAddress = null;

    /**
     * @var date $dbBiDate
     */
    protected $dbBiDate = null;

    /**
     * @var tIdentificationNumber $dbICO
     */
    protected $dbICO = null;

    /**
     * @var boolean $dbEffectiveOVM
     */
    protected $dbEffectiveOVM = null;

    /**
     * @var dbSendOptions $dbSendOptions
     */
    protected $dbSendOptions = null;

    /**
     * @param tIdDb $dbID
     * @param tDbType $dbType
     * @param string $dbName
     * @param string $dbAddress
     * @param date $dbBiDate
     * @param tIdentificationNumber $dbICO
     * @param boolean $dbEffectiveOVM
     * @param dbSendOptions $dbSendOptions
     */
    public function __construct($dbID = null, $dbType = null, $dbName = null, $dbAddress = null, $dbBiDate = null, $dbICO = null, $dbEffectiveOVM = null, $dbSendOptions = null)
    {
      $this->dbID = $dbID;
      $this->dbType = $dbType;
      $this->dbName = $dbName;
      $this->dbAddress = $dbAddress;
      $this->dbBiDate = $dbBiDate;
      $this->dbICO = $dbICO;
      $this->dbEffectiveOVM = $dbEffectiveOVM;
      $this->dbSendOptions = $dbSendOptions;
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
     * @return \Defr\CzechDataBox\Api\tdbResult
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
     * @return \Defr\CzechDataBox\Api\tdbResult
     */
    public function setDbType($dbType)
    {
      $this->dbType = $dbType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDbName()
    {
      return $this->dbName;
    }

    /**
     * @param string $dbName
     * @return \Defr\CzechDataBox\Api\tdbResult
     */
    public function setDbName($dbName)
    {
      $this->dbName = $dbName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDbAddress()
    {
      return $this->dbAddress;
    }

    /**
     * @param string $dbAddress
     * @return \Defr\CzechDataBox\Api\tdbResult
     */
    public function setDbAddress($dbAddress)
    {
      $this->dbAddress = $dbAddress;
      return $this;
    }

    /**
     * @return date
     */
    public function getDbBiDate()
    {
      return $this->dbBiDate;
    }

    /**
     * @param date $dbBiDate
     * @return \Defr\CzechDataBox\Api\tdbResult
     */
    public function setDbBiDate($dbBiDate)
    {
      $this->dbBiDate = $dbBiDate;
      return $this;
    }

    /**
     * @return tIdentificationNumber
     */
    public function getDbICO()
    {
      return $this->dbICO;
    }

    /**
     * @param tIdentificationNumber $dbICO
     * @return \Defr\CzechDataBox\Api\tdbResult
     */
    public function setDbICO($dbICO)
    {
      $this->dbICO = $dbICO;
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
     * @return \Defr\CzechDataBox\Api\tdbResult
     */
    public function setDbEffectiveOVM($dbEffectiveOVM)
    {
      $this->dbEffectiveOVM = $dbEffectiveOVM;
      return $this;
    }

    /**
     * @return dbSendOptions
     */
    public function getDbSendOptions()
    {
      return $this->dbSendOptions;
    }

    /**
     * @param dbSendOptions $dbSendOptions
     * @return \Defr\CzechDataBox\Api\tdbResult
     */
    public function setDbSendOptions($dbSendOptions)
    {
      $this->dbSendOptions = $dbSendOptions;
      return $this;
    }

}
