<?php

namespace Defr\CzechDataBox\Api;

class tDbUsersArray
{

    /**
     * @param tDbUserInfo $dbUserInfo
     */
    public function __construct(protected $dbUserInfo = null)
    {
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
     * @return \Defr\CzechDataBox\Api\tDbUsersArray
     */
    public function setDbUserInfo($dbUserInfo)
    {
        $this->dbUserInfo = $dbUserInfo;
        return $this;
    }

}
