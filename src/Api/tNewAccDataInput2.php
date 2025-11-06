<?php

namespace Defr\CzechDataBox\Api;

class tNewAccDataInput2
{

    /**
     * @var dbID $dbID
     */
    protected $dbID = null;

    /**
     * @var tIsdsID $isdsID
     */
    protected $isdsID = null;

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
     * @param dbID $dbID
     * @param tIsdsID $isdsID
     * @param boolean $dbFeePaid
     * @param boolean $dbVirtual
     * @param string $email
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbID = null, $isdsID = null, $dbFeePaid = null, $dbVirtual = null, $email = null, $dbApproved = null, $dbExternRefNumber = null)
    {
      $this->dbID = $dbID;
      $this->isdsID = $isdsID;
      $this->dbFeePaid = $dbFeePaid;
      $this->dbVirtual = $dbVirtual;
      $this->email = $email;
      $this->dbApproved = $dbApproved;
      $this->dbExternRefNumber = $dbExternRefNumber;
    }

    /**
     * @return dbID
     */
    public function getDbID()
    {
      return $this->dbID;
    }

    /**
     * @param dbID $dbID
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput2
     */
    public function setDbID($dbID)
    {
      $this->dbID = $dbID;
      return $this;
    }

    /**
     * @return tIsdsID
     */
    public function getIsdsID()
    {
      return $this->isdsID;
    }

    /**
     * @param tIsdsID $isdsID
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput2
     */
    public function setIsdsID($isdsID)
    {
      $this->isdsID = $isdsID;
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput2
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput2
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput2
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput2
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
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput2
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
      $this->dbExternRefNumber = $dbExternRefNumber;
      return $this;
    }

}
