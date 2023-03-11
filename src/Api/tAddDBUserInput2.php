<?php

namespace Defr\CzechDataBox\Api;

class tAddDBUserInput2
{

    /**
     * @var dbID $dbID
     */
    protected $dbID = null;

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
     * @param dbID $dbID
     * @param dbUserInfo $dbUserInfo
     * @param boolean $dbVirtual
     * @param string $email
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbID = null, $dbUserInfo = null, $dbVirtual = null, $email = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbID = $dbID;
        $this->dbUserInfo = $dbUserInfo;
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput2
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput2
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput2
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput2
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput2
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
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput2
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }

}
