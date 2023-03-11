<?php

namespace Defr\CzechDataBox\Api;

class tGetConstsOutput
{

    /**
     * @var constRecords $constRecords
     */
    protected $constRecords = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param constRecords $constRecords
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($constRecords = null, $dbStatus = null)
    {
        $this->constRecords = $constRecords;
        $this->dbStatus = $dbStatus;
    }


    /**
     * @return constRecords
     */
    public function getConstRecords()
    {
        return $this->constRecords;
    }


    /**
     * @param constRecords $constRecords
     * @return \Defr\CzechDataBox\Api\tGetConstsOutput
     */
    public function setConstRecords($constRecords)
    {
        $this->constRecords = $constRecords;
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
     * @return \Defr\CzechDataBox\Api\tGetConstsOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
