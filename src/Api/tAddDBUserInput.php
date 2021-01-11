<?php

namespace Defr\CzechDataBox\Api;

class tAddDBUserInput
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
     * @var boolean $dbVirtual
     */
    protected $dbVirtual = null;

    /**
     * @var string $email
     */
    protected $email = null;

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
     * @param boolean $dbVirtual
     * @param string $email
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbOwnerInfo = null, $dbUserInfo = null, $dbVirtual = null, $email = null, $dbApproved = null, $dbExternRefNumber = null)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      $this->dbUserInfo = $dbUserInfo;
      $this->dbVirtual = $dbVirtual;
      $this->email = $email;
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
     */
    public function setDbUserInfo($dbUserInfo)
    {
      $this->dbUserInfo = $dbUserInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDbVirtual()
    {
      return $this->dbVirtual;
    }

    /**
     * @param boolean $dbVirtual
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
     */
    public function setDbVirtual($dbVirtual)
    {
      $this->dbVirtual = $dbVirtual;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
      $this->dbExternRefNumber = $dbExternRefNumber;
      return $this;
    }

}
