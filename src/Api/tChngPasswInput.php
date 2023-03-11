<?php

namespace Defr\CzechDataBox\Api;

class tChngPasswInput
{

    /**
     * @var string $dbOldPassword
     */
    protected $dbOldPassword = null;

    /**
     * @var string $dbNewPassword
     */
    protected $dbNewPassword = null;

    /**
     * @param string $dbOldPassword
     * @param string $dbNewPassword
     */
    public function __construct($dbOldPassword = null, $dbNewPassword = null)
    {
        $this->dbOldPassword = $dbOldPassword;
        $this->dbNewPassword = $dbNewPassword;
    }


    /**
     * @return string
     */
    public function getDbOldPassword()
    {
        return $this->dbOldPassword;
    }


    /**
     * @param string $dbOldPassword
     * @return \Defr\CzechDataBox\Api\tChngPasswInput
     */
    public function setDbOldPassword($dbOldPassword)
    {
        $this->dbOldPassword = $dbOldPassword;
        return $this;
    }


    /**
     * @return string
     */
    public function getDbNewPassword()
    {
        return $this->dbNewPassword;
    }


    /**
     * @param string $dbNewPassword
     * @return \Defr\CzechDataBox\Api\tChngPasswInput
     */
    public function setDbNewPassword($dbNewPassword)
    {
        $this->dbNewPassword = $dbNewPassword;
        return $this;
    }

}
