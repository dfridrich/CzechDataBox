<?php

namespace Defr\CzechDataBox\Api;

class tActivateOutput
{

    protected tUserID $userId = null;

    /**
     * @param tUserID $userId
     * @param string $password
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($userId = null, protected $password = null, protected $dbStatus = null)
    {
        $this->userId = $userId;
    }


    /**
     * @return tUserID
     */
    public function getUserId()
    {
        return $this->userId;
    }


    /**
     * @param tUserID $userId
     * @return \Defr\CzechDataBox\Api\tActivateOutput
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * @param string $password
     * @return \Defr\CzechDataBox\Api\tActivateOutput
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * @return \Defr\CzechDataBox\Api\tActivateOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
