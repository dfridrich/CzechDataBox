<?php

namespace Defr\CzechDataBox\Api;

class tReqStatusOutput
{
    /**
     * @var tDbReqStatus
     */
    protected $dbStatus = null;

    /**
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbStatus = null)
    {
        $this->dbStatus = $dbStatus;
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
     *
     * @return \Defr\CzechDataBox\Api\tReqStatusOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;

        return $this;
    }
}
