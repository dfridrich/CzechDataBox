<?php

namespace Defr\CzechDataBox\Api;

class tdbResult2
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
     * @var string $dbIdOVM
     */
    protected $dbIdOVM = null;

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
     * @param string $dbIdOVM
     * @param dbSendOptions $dbSendOptions
     */
    public function __construct($dbID = null, $dbType = null, $dbName = null, $dbAddress = null, $dbBiDate = null, $dbICO = null, $dbIdOVM = null, $dbSendOptions = null)
    {
        $this->dbID = $dbID;
        $this->dbType = $dbType;
        $this->dbName = $dbName;
        $this->dbAddress = $dbAddress;
        $this->dbBiDate = $dbBiDate;
        $this->dbICO = $dbICO;
        $this->dbIdOVM = $dbIdOVM;
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
     * @return \Defr\CzechDataBox\Api\tdbResult2
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
     * @return \Defr\CzechDataBox\Api\tdbResult2
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
     * @return \Defr\CzechDataBox\Api\tdbResult2
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
     * @return \Defr\CzechDataBox\Api\tdbResult2
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
     * @return \Defr\CzechDataBox\Api\tdbResult2
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
     * @return \Defr\CzechDataBox\Api\tdbResult2
     */
    public function setDbICO($dbICO)
    {
        $this->dbICO = $dbICO;
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
     * @return \Defr\CzechDataBox\Api\tdbResult2
     */
    public function setDbIdOVM($dbIdOVM)
    {
        $this->dbIdOVM = $dbIdOVM;
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
     * @return \Defr\CzechDataBox\Api\tdbResult2
     */
    public function setDbSendOptions($dbSendOptions)
    {
        $this->dbSendOptions = $dbSendOptions;
        return $this;
    }
}
