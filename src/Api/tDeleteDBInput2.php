<?php

namespace Defr\CzechDataBox\Api;

class tDeleteDBInput2
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

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
     * @param tIdDb $dbID
     * @param date $dbOwnerTerminationDate
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbID = null, $dbOwnerTerminationDate = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbID = $dbID;
        $this->dbOwnerTerminationDate = $dbOwnerTerminationDate;
        $this->dbApproved = $dbApproved;
        $this->dbExternRefNumber = $dbExternRefNumber;
    }

    /**
     * @return tIdDb
     */
    public function getDbID()
    {
        return $this->dbID;
    }

    /**
     * @param tIdDb $dbID
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput2
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
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
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput2
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
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput2
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
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput2
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }
}
