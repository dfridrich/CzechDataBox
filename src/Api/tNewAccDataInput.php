<?php

namespace Defr\CzechDataBox\Api;

class tNewAccDataInput
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
     * @var boolean $dbFeePaid
     */
    protected $dbFeePaid = null;

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
     * @param boolean $dbFeePaid
     * @param boolean $dbVirtual
     * @param string $email
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbOwnerInfo = null, $dbUserInfo = null, $dbFeePaid = null, $dbVirtual = null, $email = null, $dbApproved = null, $dbExternRefNumber = null)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      $this->dbUserInfo = $dbUserInfo;
      $this->dbFeePaid = $dbFeePaid;
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setDbUserInfo($dbUserInfo)
    {
      $this->dbUserInfo = $dbUserInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDbFeePaid()
    {
      return $this->dbFeePaid;
    }

    /**
     * @param boolean $dbFeePaid
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setDbFeePaid($dbFeePaid)
    {
      $this->dbFeePaid = $dbFeePaid;
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
      $this->dbExternRefNumber = $dbExternRefNumber;
      return $this;
    }

}
