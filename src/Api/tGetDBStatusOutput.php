<?php

namespace Defr\CzechDataBox\Api;

class tGetDBStatusOutput
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

    /**
     * @var tdbPeriodsArray $Periods
     */
    protected $Periods = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tIdDb $dbID
     * @param tdbPeriodsArray $Periods
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbID = null, $Periods = null, $dbStatus = null)
    {
      $this->dbID = $dbID;
      $this->Periods = $Periods;
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
     * @return \Defr\CzechDataBox\Api\tGetDBStatusOutput
     */
    public function setDbID($dbID)
    {
      $this->dbID = $dbID;
      return $this;
    }

    /**
     * @return tdbPeriodsArray
     */
    public function getPeriods()
    {
      return $this->Periods;
    }

    /**
     * @param tdbPeriodsArray $Periods
     * @return \Defr\CzechDataBox\Api\tGetDBStatusOutput
     */
    public function setPeriods($Periods)
    {
      $this->Periods = $Periods;
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
     * @return \Defr\CzechDataBox\Api\tGetDBStatusOutput
     */
    public function setDbStatus($dbStatus)
    {
      $this->dbStatus = $dbStatus;
      return $this;
    }

}
