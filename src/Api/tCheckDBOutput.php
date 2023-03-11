<?php

namespace Defr\CzechDataBox\Api;

class tCheckDBOutput
{

    /**
     * @var int $dbState
     */
    protected $dbState = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param int $dbState
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbState = null, $dbStatus = null)
    {
        $this->dbState = $dbState;
        $this->dbStatus = $dbStatus;
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
     * @return \Defr\CzechDataBox\Api\tCheckDBOutput
     */
    public function setDbState($dbState)
    {
        $this->dbState = $dbState;
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
     * @return \Defr\CzechDataBox\Api\tCheckDBOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
