<?php

namespace Defr\CzechDataBox\Api;

class tCreateDBInput
{

    protected tIdDb $dbUpperDBId = null;

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @param tDbUsersArray $dbPrimaryUsers
     * @param string $dbFormerNames
     * @param tIdDb $dbUpperDBId
     * @param string $dbCEOLabel
     * @param boolean $dbVirtual
     * @param string $email
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct(protected $dbOwnerInfo = null, protected $dbPrimaryUsers = null, protected $dbFormerNames = null, $dbUpperDBId = null, protected $dbCEOLabel = null, protected $dbVirtual = null, protected $email = null, protected $dbApproved = null, protected $dbExternRefNumber = null)
    {
        $this->dbUpperDBId = $dbUpperDBId;
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
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        return $this;
    }


    /**
     * @return tDbUsersArray
     */
    public function getDbPrimaryUsers()
    {
        return $this->dbPrimaryUsers;
    }


    /**
     * @param tDbUsersArray $dbPrimaryUsers
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
     */
    public function setDbPrimaryUsers($dbPrimaryUsers)
    {
        $this->dbPrimaryUsers = $dbPrimaryUsers;
        return $this;
    }


    /**
     * @return string
     */
    public function getDbFormerNames()
    {
        return $this->dbFormerNames;
    }


    /**
     * @param string $dbFormerNames
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
     */
    public function setDbFormerNames($dbFormerNames)
    {
        $this->dbFormerNames = $dbFormerNames;
        return $this;
    }


    /**
     * @return tIdDb
     */
    public function getDbUpperDBId()
    {
        return $this->dbUpperDBId;
    }


    /**
     * @param tIdDb $dbUpperDBId
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
     */
    public function setDbUpperDBId($dbUpperDBId)
    {
        $this->dbUpperDBId = $dbUpperDBId;
        return $this;
    }


    /**
     * @return string
     */
    public function getDbCEOLabel()
    {
        return $this->dbCEOLabel;
    }


    /**
     * @param string $dbCEOLabel
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
     */
    public function setDbCEOLabel($dbCEOLabel)
    {
        $this->dbCEOLabel = $dbCEOLabel;
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
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
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
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
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
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
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
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }

}
