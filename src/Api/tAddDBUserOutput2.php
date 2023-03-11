<?php

namespace Defr\CzechDataBox\Api;

class tAddDBUserOutput2
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

    /**
     * @var tDbAccessDataId $dbAccessDataId
     */
    protected $dbAccessDataId = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tIdDb $dbID
     * @param tDbAccessDataId $dbAccessDataId
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbID = null, $dbAccessDataId = null, $dbStatus = null)
    {
        $this->dbID = $dbID;
        $this->dbAccessDataId = $dbAccessDataId;
        $this->dbStatus = $dbStatus;
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserOutput2
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }


    /**
     * @return tDbAccessDataId
     */
    public function getDbAccessDataId()
    {
        return $this->dbAccessDataId;
    }


    /**
     * @param tDbAccessDataId $dbAccessDataId
     * @return \Defr\CzechDataBox\Api\tAddDBUserOutput2
     */
    public function setDbAccessDataId($dbAccessDataId)
    {
        $this->dbAccessDataId = $dbAccessDataId;
        return $this;
    }


    /**
     * @return tDbReqStatus
     */
    public function getDbStatus()
    {
        return $this->dbStatus;
    }


    /**
     * @param tDbReqStatus $dbStatus
     * @return \Defr\CzechDataBox\Api\tAddDBUserOutput2
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
