<?php

namespace Defr\CzechDataBox\Api;

class tCreateDBPFOInfoOutput
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tIdDb $dbID
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbID = null, $dbStatus = null)
    {
      $this->dbID = $dbID;
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
