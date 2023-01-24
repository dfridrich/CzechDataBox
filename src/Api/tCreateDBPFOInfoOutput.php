<?php

namespace Defr\CzechDataBox\Api;

class tCreateDBPFOInfoOutput
{

    protected tIdDb $dbID = null;

    /**
     * @param tIdDb $dbID
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbID = null, protected $dbStatus = null)
    {
        $this->dbID = $dbID;
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
     * @return \Defr\CzechDataBox\Api\tCreateDBPFOInfoOutput
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
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
     * @return \Defr\CzechDataBox\Api\tCreateDBPFOInfoOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
