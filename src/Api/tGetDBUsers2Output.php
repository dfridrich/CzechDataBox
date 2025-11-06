<?php

namespace Defr\CzechDataBox\Api;

class tGetDBUsers2Output
{

    /**
     * @var tDbUsersArray2 $dbUsers
     */
    protected $dbUsers = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tDbUsersArray2 $dbUsers
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbUsers = null, $dbStatus = null)
    {
        $this->dbUsers = $dbUsers;
        $this->dbStatus = $dbStatus;
    }

    /**
     * @return tDbUsersArray2
     */
    public function getDbUsers()
    {
        return $this->dbUsers;
    }

    /**
     * @param tDbUsersArray2 $dbUsers
     * @return \Defr\CzechDataBox\Api\tGetDBUsers2Output
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
     * @return \Defr\CzechDataBox\Api\tGetDBUsers2Output
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }
}
