<?php

namespace Defr\CzechDataBox\Api;

class tUpdateDBInput
{

    /**
     * @var tDbOwnerInfoExt $dbOldOwnerInfo
     */
    protected $dbOldOwnerInfo = null;

    /**
     * @var tDbOwnerInfoExt $dbNewOwnerInfo
     */
    protected $dbNewOwnerInfo = null;

    /**
     * @var boolean $dbApproved
     */
    protected $dbApproved = null;

    /**
     * @var string $dbExternRefNumber
     */
    protected $dbExternRefNumber = null;

    /**
     * @param tDbOwnerInfoExt $dbOldOwnerInfo
     * @param tDbOwnerInfoExt $dbNewOwnerInfo
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbOldOwnerInfo = null, $dbNewOwnerInfo = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbOldOwnerInfo = $dbOldOwnerInfo;
        $this->dbNewOwnerInfo = $dbNewOwnerInfo;
        $this->dbApproved = $dbApproved;
        $this->dbExternRefNumber = $dbExternRefNumber;
    }

    /**
     * @return tDbOwnerInfoExt
     */
    public function getDbOldOwnerInfo()
    {
        return $this->dbOldOwnerInfo;
    }

    /**
     * @param tDbOwnerInfoExt $dbOldOwnerInfo
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput
     */
    public function setDbOldOwnerInfo($dbOldOwnerInfo)
    {
        $this->dbOldOwnerInfo = $dbOldOwnerInfo;
        return $this;
    }

    /**
     * @return tDbOwnerInfoExt
     */
    public function getDbNewOwnerInfo()
    {
        return $this->dbNewOwnerInfo;
    }

    /**
     * @param tDbOwnerInfoExt $dbNewOwnerInfo
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput
     */
    public function setDbNewOwnerInfo($dbNewOwnerInfo)
    {
        $this->dbNewOwnerInfo = $dbNewOwnerInfo;
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
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }
}
