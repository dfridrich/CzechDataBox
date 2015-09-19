<?php

namespace Defr\CzechDataBox\Api;

class tCreateDBInput
{
    /**
     * @var tDbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var tDbUsersArray
     */
    protected $dbPrimaryUsers = null;

    /**
     * @var string
     */
    protected $dbFormerNames = null;

    /**
     * @var tIdDb
     */
    protected $dbUpperDBId = null;

    /**
     * @var string
     */
    protected $dbCEOLabel = null;

    /**
     * @var bool
     */
    protected $dbVirtual = null;

    /**
     * @var string
     */
    protected $email = null;

    /**
     * @var bool
     */
    protected $dbApproved = null;

    /**
     * @var string
     */
    protected $dbExternRefNumber = null;

    /**
     * @param tDbOwnerInfo  $dbOwnerInfo
     * @param tDbUsersArray $dbPrimaryUsers
     * @param string        $dbFormerNames
     * @param tIdDb         $dbUpperDBId
     * @param string        $dbCEOLabel
     * @param bool          $dbVirtual
     * @param string        $email
     * @param bool          $dbApproved
     * @param string        $dbExternRefNumber
     */
    public function __construct($dbOwnerInfo = null, $dbPrimaryUsers = null, $dbFormerNames = null, $dbUpperDBId = null, $dbCEOLabel = null, $dbVirtual = null, $email = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        $this->dbPrimaryUsers = $dbPrimaryUsers;
        $this->dbFormerNames = $dbFormerNames;
        $this->dbUpperDBId = $dbUpperDBId;
        $this->dbCEOLabel = $dbCEOLabel;
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
     *
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
     *
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
     *
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
     *
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
     *
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
     */
    public function setDbCEOLabel($dbCEOLabel)
    {
        $this->dbCEOLabel = $dbCEOLabel;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDbVirtual()
    {
        return $this->dbVirtual;
    }

    /**
     * @param bool $dbVirtual
     *
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
     *
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDbApproved()
    {
        return $this->dbApproved;
    }

    /**
     * @param bool $dbApproved
     *
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
     *
     * @return \Defr\CzechDataBox\Api\tCreateDBInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;

        return $this;
    }
}
