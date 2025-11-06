<?php

namespace Defr\CzechDataBox\Api;

class tDbUsersArray2
{

    /**
     * @var dbUserInfo $dbUserInfo
     */
    protected $dbUserInfo = null;

    /**
     * @param dbUserInfo $dbUserInfo
     */
    public function __construct($dbUserInfo = null)
    {
        $this->dbUserInfo = $dbUserInfo;
    }

    /**
     * @return dbUserInfo
     */
    public function getDbUserInfo()
    {
        return $this->dbUserInfo;
    }

    /**
     * @param dbUserInfo $dbUserInfo
     * @return \Defr\CzechDataBox\Api\tDbUsersArray2
     */
    public function setDbUserInfo($dbUserInfo)
    {
        $this->dbUserInfo = $dbUserInfo;
        return $this;
    }
}
