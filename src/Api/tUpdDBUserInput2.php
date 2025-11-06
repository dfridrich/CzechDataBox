<?php

namespace Defr\CzechDataBox\Api;

class tUpdDBUserInput2
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
     * @var tDbUserInfoExt2 $dbNewUserInfo
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
     * @param dbID $dbID
     * @param tIsdsID $isdsID
     * @param tDbUserInfoExt2 $dbNewUserInfo
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbID = null, $isdsID = null, $dbNewUserInfo = null, $dbApproved = null, $dbExternRefNumber = null)
    {
      $this->dbID = $dbID;
      $this->isdsID = $isdsID;
      $this->dbNewUserInfo = $dbNewUserInfo;
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
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput2
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
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput2
     */
    public function setIsdsID($isdsID)
    {
      $this->isdsID = $isdsID;
      return $this;
    }

    /**
     * @return tDbUserInfoExt2
     */
    public function getDbNewUserInfo()
    {
      return $this->dbNewUserInfo;
    }

    /**
     * @param tDbUserInfoExt2 $dbNewUserInfo
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput2
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
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput2
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
     * @return \Defr\CzechDataBox\Api\tUpdDBUserInput2
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
      $this->dbExternRefNumber = $dbExternRefNumber;
      return $this;
    }

}
