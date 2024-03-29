<?php

namespace Defr\CzechDataBox\Api;

class tNewAccDataOutput2
{

    /**
     * @var tUserID $dbUserID
     */
    protected $dbUserID = null;

    /**
     * @var tDbAccessDataId $dbAccessDataId
     */
    protected $dbAccessDataId = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tUserID $dbUserID
     * @param tDbAccessDataId $dbAccessDataId
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbUserID = null, $dbAccessDataId = null, $dbStatus = null)
    {
        $this->dbUserID = $dbUserID;
        $this->dbAccessDataId = $dbAccessDataId;
        $this->dbStatus = $dbStatus;
    }

    /**
     * @return tUserID
     */
    public function getDbUserID()
    {
        return $this->dbUserID;
    }

    /**
     * @param tUserID $dbUserID
     * @return \Defr\CzechDataBox\Api\tNewAccDataOutput2
     */
    public function setDbUserID($dbUserID)
    {
        $this->dbUserID = $dbUserID;
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataOutput2
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataOutput2
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }
}
