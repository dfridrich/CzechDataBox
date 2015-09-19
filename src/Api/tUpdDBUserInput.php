<?php

namespace Defr\CzechDataBox\Api;

class tUpdDBUserInput
{
    /**
     * @var tDbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var tDbUserInfo
     */
    protected $dbOldUserInfo = null;

    /**
     * @var tDbUserInfo
     */
    protected $dbNewUserInfo = null;

    /**
     * @var bool
     */
    protected $dbApproved = null;

    /**
     * @var string
     */
    protected $dbExternRefNumber = null;

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @param tDbUserInfo  $dbOldUserInfo
     * @param tDbUserInfo  $dbNewUserInfo
     * @param bool         $dbApproved
     * @param string       $dbExternRefNumber
     */
    public function __construct($dbOwnerInfo = null, $dbOldUserInfo = null, $dbNewUserInfo = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        $this->dbOldUserInfo = $dbOldUserInfo;
        $this->dbNewUserInfo = $dbNewUserInfo;
        $this->dbApproved = $dbApproved;
        $this->dbExternRefNumber = $dbExternRefNumber;
    }

    /**
     * @return tDbOwnerInfo
     */
    public function getDbOwnerInfo()
    {
        return $this->dbOwnerInfo;
    }

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     *
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;

        return $this;
    }

    /**
     * @return tDbUserInfo
     */
    public function getDbOldUserInfo()
    {
        return $this->dbOldUserInfo;
    }

    /**
     * @param tDbUserInfo $dbOldUserInfo
     *
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput
     */
    public function setDbOldUserInfo($dbOldUserInfo)
    {
        $this->dbOldUserInfo = $dbOldUserInfo;

        return $this;
    }

    /**
     * @return tDbUserInfo
     */
    public function getDbNewUserInfo()
    {
        return $this->dbNewUserInfo;
    }

    /**
     * @param tDbUserInfo $dbNewUserInfo
     *
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput
     */
    public function setDbNewUserInfo($dbNewUserInfo)
    {
        $this->dbNewUserInfo = $dbNewUserInfo;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDbApproved()
    {
        return $this->dbApproved;
    }

    /**
     * @param bool $dbApproved
     *
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput
     */
    public function setDbApproved($dbApproved)
    {
        $this->dbApproved = $dbApproved;

        return $this;
    }

    /**
     * @return string
     */
    public function getDbExternRefNumber()
    {
        return $this->dbExternRefNumber;
    }

    /**
     * @param string $dbExternRefNumber
     *
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;

        return $this;
    }
}
