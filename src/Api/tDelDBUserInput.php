<?php

namespace Defr\CzechDataBox\Api;

class tDelDBUserInput
{

    /**
     * @var tDbOwnerInfo $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var tDbUserInfo $dbUserInfo
     */
    protected $dbUserInfo = null;

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
     * @param tDbUserInfo $dbUserInfo
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbOwnerInfo = null, $dbUserInfo = null, $dbApproved = null, $dbExternRefNumber = null)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      $this->dbUserInfo = $dbUserInfo;
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
     * @return \Defr\CzechDataBox\Api\tDelDBUserInput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      return $this;
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
     * @return \Defr\CzechDataBox\Api\tDelDBUserInput
     */
    public function setDbUserInfo($dbUserInfo)
    {
      $this->dbUserInfo = $dbUserInfo;
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
     * @return \Defr\CzechDataBox\Api\tDelDBUserInput
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
     * @return \Defr\CzechDataBox\Api\tDelDBUserInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
      $this->dbExternRefNumber = $dbExternRefNumber;
      return $this;
    }

}
