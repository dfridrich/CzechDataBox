<?php

namespace Defr\CzechDataBox\Api;

class tDeleteDBInput
{

    /**
     * @var tDbOwnerInfo $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var date $dbOwnerTerminationDate
     */
    protected $dbOwnerTerminationDate = null;

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
     * @param date $dbOwnerTerminationDate
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbOwnerInfo = null, $dbOwnerTerminationDate = null, $dbApproved = null, $dbExternRefNumber = null)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      $this->dbOwnerTerminationDate = $dbOwnerTerminationDate;
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
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      return $this;
    }

    /**
     * @return date
     */
    public function getDbOwnerTerminationDate()
    {
      return $this->dbOwnerTerminationDate;
    }

    /**
     * @param date $dbOwnerTerminationDate
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput
     */
    public function setDbOwnerTerminationDate($dbOwnerTerminationDate)
    {
      $this->dbOwnerTerminationDate = $dbOwnerTerminationDate;
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
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput
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
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
      $this->dbExternRefNumber = $dbExternRefNumber;
      return $this;
    }

}
