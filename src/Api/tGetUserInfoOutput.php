<?php

namespace Defr\CzechDataBox\Api;

class tGetUserInfoOutput
{

    /**
     * @var tDbUserInfo $dbUserInfo
     */
    protected $dbUserInfo = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tDbUserInfo $dbUserInfo
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbUserInfo = null, $dbStatus = null)
    {
        $this->dbUserInfo = $dbUserInfo;
        $this->dbStatus = $dbStatus;
    }

    /**
     * @return tDbUserInfo
     */
    public function getDbUserInfo()
    {
        return $this->dbUserInfo;
    }

    /**
     * @param tDbUserInfo $dbUserInfo
     * @return \Defr\CzechDataBox\Api\tGetUserInfoOutput
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
     * @return \Defr\CzechDataBox\Api\tGetUserInfoOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }
}
