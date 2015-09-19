<?php

namespace Defr\CzechDataBox\Api;

class tCreateDBPFOInfoInput
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
     * @param bool          $dbApproved
     * @param string        $dbExternRefNumber
     */
    public function __construct($dbOwnerInfo = null, $dbPrimaryUsers = null, $dbFormerNames = null, $dbUpperDBId = null, $dbCEOLabel = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        $this->dbPrimaryUsers = $dbPrimaryUsers;
        $this->dbFormerNames = $dbFormerNames;
        $this->dbUpperDBId = $dbUpperDBId;
        $this->dbCEOLabel = $dbCEOLabel;
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
     * @return \Defr\CzechDataBox\Api\tCreateDBPFOInfoInput
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
     * @return \Defr\CzechDataBox\Api\tCreateDBPFOInfoInput
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
     * @return \Defr\CzechDataBox\Api\tCreateDBPFOInfoInput
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
     * @return \Defr\CzechDataBox\Api\tCreateDBPFOInfoInput
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
     * @return \Defr\CzechDataBox\Api\tCreateDBPFOInfoInput
     */
    public function setDbCEOLabel($dbCEOLabel)
    {
        $this->dbCEOLabel = $dbCEOLabel;

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
     * @return \Defr\CzechDataBox\Api\tCreateDBPFOInfoInput
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
     * @return \Defr\CzechDataBox\Api\tCreateDBPFOInfoInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;

        return $this;
    }
}
