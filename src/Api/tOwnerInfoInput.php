<?php

namespace Defr\CzechDataBox\Api;

class tOwnerInfoInput
{

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct(protected $dbOwnerInfo = null, protected $dbApproved = null, protected $dbExternRefNumber = null)
    {
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
     * @return \Defr\CzechDataBox\Api\tOwnerInfoInput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
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
     * @return \Defr\CzechDataBox\Api\tOwnerInfoInput
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
     * @return \Defr\CzechDataBox\Api\tOwnerInfoInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }

}
