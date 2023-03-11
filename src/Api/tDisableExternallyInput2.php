<?php

namespace Defr\CzechDataBox\Api;

class tDisableExternallyInput2
{

    /**
     * @var dbID $dbID
     */
    protected $dbID = null;

    /**
     * @var date $dbOwnerDisableDate
     */
    protected $dbOwnerDisableDate = null;

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
     * @param date $dbOwnerDisableDate
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbID = null, $dbOwnerDisableDate = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbID = $dbID;
        $this->dbOwnerDisableDate = $dbOwnerDisableDate;
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
     * @return \Defr\CzechDataBox\Api\tDisableExternallyInput2
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }

    /**
     * @return date
     */
    public function getDbOwnerDisableDate()
    {
        return $this->dbOwnerDisableDate;
    }

    /**
     * @param date $dbOwnerDisableDate
     * @return \Defr\CzechDataBox\Api\tDisableExternallyInput2
     */
    public function setDbOwnerDisableDate($dbOwnerDisableDate)
    {
        $this->dbOwnerDisableDate = $dbOwnerDisableDate;
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
     * @return \Defr\CzechDataBox\Api\tDisableExternallyInput2
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
     * @return \Defr\CzechDataBox\Api\tDisableExternallyInput2
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }
}
