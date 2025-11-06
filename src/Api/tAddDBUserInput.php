<?php

namespace Defr\CzechDataBox\Api;

class tAddDBUserInput
{

    /**
     * @var tDbOwnerInfoExt $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var dbUserInfo $dbUserInfo
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
     * @param tDbOwnerInfoExt $dbOwnerInfo
     * @param dbUserInfo $dbUserInfo
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
     * @return tDbOwnerInfoExt
     */
    public function getDbOwnerInfo()
    {
      return $this->dbOwnerInfo;
    }

    /**
     * @param tDbOwnerInfoExt $dbOwnerInfo
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      return $this;
    }

    /**
     * @return dbUserInfo
     */
    public function getDbUserInfo()
    {
      return $this->dbUserInfo;
    }

    /**
     * @param dbUserInfo $dbUserInfo
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
