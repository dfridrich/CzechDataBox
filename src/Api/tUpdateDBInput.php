<?php

namespace Defr\CzechDataBox\Api;

class tUpdateDBInput
{

    /**
     * @param tDbOwnerInfo $dbOldOwnerInfo
     * @param tDbOwnerInfo $dbNewOwnerInfo
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct(protected $dbOldOwnerInfo = null, protected $dbNewOwnerInfo = null, protected $dbApproved = null, protected $dbExternRefNumber = null)
    {
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
