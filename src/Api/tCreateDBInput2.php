<?php

namespace Defr\CzechDataBox\Api;

class tCreateDBInput2
{

    /**
     * @var dbOwnerInfo $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var string $pnLastNameAtBirth
     */
    protected $pnLastNameAtBirth = null;

    /**
     * @var string $notifEmail
     */
    protected $notifEmail = null;

    /**
     * @var tDbUsersArray2 $dbPrimaryUsers
     */
    protected $dbPrimaryUsers = null;

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
     * @param dbOwnerInfo $dbOwnerInfo
     * @param string $pnLastNameAtBirth
     * @param string $notifEmail
     * @param tDbUsersArray2 $dbPrimaryUsers
     * @param boolean $dbVirtual
     * @param string $email
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbOwnerInfo = null, $pnLastNameAtBirth = null, $notifEmail = null, $dbPrimaryUsers = null, $dbVirtual = null, $email = null, $dbApproved = null, $dbExternRefNumber = null)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      $this->pnLastNameAtBirth = $pnLastNameAtBirth;
      $this->notifEmail = $notifEmail;
      $this->dbPrimaryUsers = $dbPrimaryUsers;
      $this->dbVirtual = $dbVirtual;
      $this->email = $email;
      $this->dbApproved = $dbApproved;
      $this->dbExternRefNumber = $dbExternRefNumber;
    }

    /**
     * @return dbOwnerInfo
     */
    public function getDbOwnerInfo()
    {
      return $this->dbOwnerInfo;
    }

    /**
     * @param dbOwnerInfo $dbOwnerInfo
     * @return \Defr\CzechDataBox\Api\tCreateDBInput2
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPnLastNameAtBirth()
    {
      return $this->pnLastNameAtBirth;
    }

    /**
     * @param string $pnLastNameAtBirth
     * @return \Defr\CzechDataBox\Api\tCreateDBInput2
     */
    public function setPnLastNameAtBirth($pnLastNameAtBirth)
    {
      $this->pnLastNameAtBirth = $pnLastNameAtBirth;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotifEmail()
    {
      return $this->notifEmail;
    }

    /**
     * @param string $notifEmail
     * @return \Defr\CzechDataBox\Api\tCreateDBInput2
     */
    public function setNotifEmail($notifEmail)
    {
      $this->notifEmail = $notifEmail;
      return $this;
    }

    /**
     * @return tDbUsersArray2
     */
    public function getDbPrimaryUsers()
    {
      return $this->dbPrimaryUsers;
    }

    /**
     * @param tDbUsersArray2 $dbPrimaryUsers
     * @return \Defr\CzechDataBox\Api\tCreateDBInput2
     */
    public function setDbPrimaryUsers($dbPrimaryUsers)
    {
      $this->dbPrimaryUsers = $dbPrimaryUsers;
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
     * @return \Defr\CzechDataBox\Api\tCreateDBInput2
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
     * @return \Defr\CzechDataBox\Api\tCreateDBInput2
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
     * @return \Defr\CzechDataBox\Api\tCreateDBInput2
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
     * @return \Defr\CzechDataBox\Api\tCreateDBInput2
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
      $this->dbExternRefNumber = $dbExternRefNumber;
      return $this;
    }

}
