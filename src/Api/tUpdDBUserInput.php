<?php

namespace Defr\CzechDataBox\Api;

class tUpdDBUserInput
{

    /**
     * @var tDbOwnerInfo $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var tDbUserInfo $dbOldUserInfo
     */
    protected $dbOldUserInfo = null;

    /**
     * @var tDbUserInfo $dbNewUserInfo
     */
    protected $dbNewUserInfo = null;

    /**
     * @var boolean $dbApproved
     */
    protected $dbApproved = null;

    /**
     * @var string $dbExternRefNumber
     */
    protected $dbExternRefNumber = null;

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @param tDbUserInfo $dbOldUserInfo
     * @param tDbUserInfo $dbNewUserInfo
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
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
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput
     */
    public function setDbNewUserInfo($dbNewUserInfo)
    {
      $this->dbNewUserInfo = $dbNewUserInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDbApproved()
    {
      return $this->dbApproved;
    }

    /**
     * @param boolean $dbApproved
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
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
      $this->dbExternRefNumber = $dbExternRefNumber;
      return $this;
    }

}
