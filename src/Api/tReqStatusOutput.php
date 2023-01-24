<?php

namespace Defr\CzechDataBox\Api;

class tReqStatusOutput
{

    /**
     * @param tDbReqStatus $dbStatus
     */
    public function __construct(protected $dbStatus = null)
    {
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
     * @return \Defr\CzechDataBox\Api\tReqStatusOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
