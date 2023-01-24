<?php

namespace Defr\CzechDataBox\Api;

class tAddDBUserOutput
{

    protected tIdDb $dbID = null;

    protected tDbAccessDataId $dbAccessDataId = null;

    /**
     * @param tIdDb $dbID
     * @param tDbAccessDataId $dbAccessDataId
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbID = null, $dbAccessDataId = null, protected $dbStatus = null)
    {
        $this->dbID = $dbID;
        $this->dbAccessDataId = $dbAccessDataId;
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserOutput
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserOutput
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
