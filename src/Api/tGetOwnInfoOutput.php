<?php

namespace Defr\CzechDataBox\Api;

class tGetOwnInfoOutput
{

    /**
     * @var tDbOwnerInfo $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbOwnerInfo = null, $dbStatus = null)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      $this->dbStatus = $dbStatus;
    }

    /**
     * @return tDbOwnerInfo
     */
    public function getDbOwnerInfo()
    {
      return $this->dbOwnerInfo;
    }

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @return \Defr\CzechDataBox\Api\tGetOwnInfoOutput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
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
     * @return \Defr\CzechDataBox\Api\tGetOwnInfoOutput
     */
    public function setDbStatus($dbStatus)
    {
      $this->dbStatus = $dbStatus;
      return $this;
    }

}
