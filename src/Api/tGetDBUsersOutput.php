<?php

namespace Defr\CzechDataBox\Api;

class tGetDBUsersOutput
{
    /**
     * @var tDbUsersArray
     */
    protected $dbUsers = null;

    /**
     * @var tDbReqStatus
     */
    protected $dbStatus = null;

    /**
     * @param tDbUsersArray $dbUsers
     * @param tDbReqStatus  $dbStatus
     */
    public function __construct($dbUsers = null, $dbStatus = null)
    {
        $this->dbUsers = $dbUsers;
        $this->dbStatus = $dbStatus;
    }

    /**
     * @return tDbUsersArray
     */
    public function getDbUsers()
    {
        return $this->dbUsers;
    }

    /**
     * @param tDbUsersArray $dbUsers
     *
     * @return \Defr\CzechDataBox\Api\tGetDBUsersOutput
     */
    public function setDbUsers($dbUsers)
    {
        $this->dbUsers = $dbUsers;

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
     *
     * @return \Defr\CzechDataBox\Api\tGetDBUsersOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;

        return $this;
    }
}
