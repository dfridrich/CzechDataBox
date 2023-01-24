<?php

namespace Defr\CzechDataBox\Api;

class tDisableExternallyInput
{

    protected date $dbOwnerDisableDate = null;

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @param date $dbOwnerDisableDate
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct(protected $dbOwnerInfo = null, $dbOwnerDisableDate = null, protected $dbApproved = null, protected $dbExternRefNumber = null)
    {
        $this->dbOwnerDisableDate = $dbOwnerDisableDate;
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
     * @return \Defr\CzechDataBox\Api\tDisableExternallyInput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
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
     * @return \Defr\CzechDataBox\Api\tDisableExternallyInput
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
     * @return \Defr\CzechDataBox\Api\tDisableExternallyInput
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
     * @return \Defr\CzechDataBox\Api\tDisableExternallyInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }

}
