<?php

namespace Defr\CzechDataBox\Api;

class tDeleteDBInput
{
    /**
     * @var tDbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var date
     */
    protected $dbOwnerTerminationDate = null;

    /**
     * @var bool
     */
    protected $dbApproved = null;

    /**
     * @var string
     */
    protected $dbExternRefNumber = null;

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @param date         $dbOwnerTerminationDate
     * @param bool         $dbApproved
     * @param string       $dbExternRefNumber
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
     *
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
     *
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput
     */
    public function setDbOwnerTerminationDate($dbOwnerTerminationDate)
    {
        $this->dbOwnerTerminationDate = $dbOwnerTerminationDate;

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
     *
     * @return \Defr\CzechDataBox\Api\tDeleteDBInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;

        return $this;
    }
}
