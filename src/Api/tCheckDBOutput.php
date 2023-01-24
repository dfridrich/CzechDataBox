<?php

namespace Defr\CzechDataBox\Api;

class tCheckDBOutput
{

    /**
     * @param int $dbState
     * @param tDbReqStatus $dbStatus
     */
    public function __construct(protected $dbState = null, protected $dbStatus = null)
    {
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
