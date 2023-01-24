<?php

namespace Defr\CzechDataBox\Api;

class tGetDBUsersOutput
{

    /**
     * @param tDbUsersArray $dbUsers
     * @param tDbReqStatus $dbStatus
     */
    public function __construct(protected $dbUsers = null, protected $dbStatus = null)
    {
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
     * @return \Defr\CzechDataBox\Api\tGetDBUsersOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
