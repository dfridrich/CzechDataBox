<?php

namespace Defr\CzechDataBox\Api;

class tGetUserInfoOutput2
{

    /**
     * @var tDbUserInfoExt2 $dbUserInfo
     */
    protected $dbUserInfo = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tDbUserInfoExt2 $dbUserInfo
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbUserInfo = null, $dbStatus = null)
    {
      $this->dbUserInfo = $dbUserInfo;
      $this->dbStatus = $dbStatus;
    }

    /**
     * @return tDbUserInfoExt2
     */
    public function getDbUserInfo()
    {
      return $this->dbUserInfo;
    }

    /**
     * @param tDbUserInfoExt2 $dbUserInfo
     * @return \Defr\CzechDataBox\Api\tGetUserInfoOutput2
     */
    public function setDbUserInfo($dbUserInfo)
    {
      $this->dbUserInfo = $dbUserInfo;
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
     * @return \Defr\CzechDataBox\Api\tGetUserInfoOutput2
     */
    public function setDbStatus($dbStatus)
    {
      $this->dbStatus = $dbStatus;
      return $this;
    }

}
