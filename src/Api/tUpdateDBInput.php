<?php

namespace Defr\CzechDataBox\Api;

class tUpdateDBInput
{
    /**
     * @var tDbOwnerInfo
     */
    protected $dbOldOwnerInfo = null;

    /**
     * @var tDbOwnerInfo
     */
    protected $dbNewOwnerInfo = null;

    /**
     * @var bool
     */
    protected $dbApproved = null;

    /**
     * @var string
     */
    protected $dbExternRefNumber = null;

    /**
     * @param tDbOwnerInfo $dbOldOwnerInfo
     * @param tDbOwnerInfo $dbNewOwnerInfo
     * @param bool         $dbApproved
     * @param string       $dbExternRefNumber
     */
    public function __construct($dbOldOwnerInfo = null, $dbNewOwnerInfo = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbOldOwnerInfo = $dbOldOwnerInfo;
        $this->dbNewOwnerInfo = $dbNewOwnerInfo;
        $this->dbApproved = $dbApproved;
        $this->dbExternRefNumber = $dbExternRefNumber;
    }

    /**
     * @return tDbOwnerInfo
     */
    public function getDbOldOwnerInfo()
    {
        return $this->dbOldOwnerInfo;
    }

    /**
     * @param tDbOwnerInfo $dbOldOwnerInfo
     *
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput
     */
    public function setDbOldOwnerInfo($dbOldOwnerInfo)
    {
        $this->dbOldOwnerInfo = $dbOldOwnerInfo;

        return $this;
    }

    /**
     * @return tDbOwnerInfo
     */
    public function getDbNewOwnerInfo()
    {
        return $this->dbNewOwnerInfo;
    }

    /**
     * @param tDbOwnerInfo $dbNewOwnerInfo
     *
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput
     */
    public function setDbNewOwnerInfo($dbNewOwnerInfo)
    {
        $this->dbNewOwnerInfo = $dbNewOwnerInfo;

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
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput
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
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;

        return $this;
    }
}
