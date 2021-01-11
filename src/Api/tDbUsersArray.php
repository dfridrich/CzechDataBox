<?php

namespace Defr\CzechDataBox\Api;

class tDbUsersArray
{

    /**
     * @var tDbUserInfo $dbUserInfo
     */
    protected $dbUserInfo = null;

    /**
     * @param tDbUserInfo $dbUserInfo
     */
    public function __construct($dbUserInfo = null)
    {
      $this->dbUserInfo = $dbUserInfo;
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
