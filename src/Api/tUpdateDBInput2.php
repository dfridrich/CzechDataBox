<?php

namespace Defr\CzechDataBox\Api;

class tUpdateDBInput2
{

    /**
     * @var dbID $dbID
     */
    protected $dbID = null;

    /**
     * @var tDbOwnerInfoExt2 $dbNewOwnerInfo
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
     * @param dbID $dbID
     * @param tDbOwnerInfoExt2 $dbNewOwnerInfo
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbID = null, $dbNewOwnerInfo = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbID = $dbID;
        $this->dbNewOwnerInfo = $dbNewOwnerInfo;
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
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput2
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }


    /**
     * @return tDbOwnerInfoExt2
     */
    public function getDbNewOwnerInfo()
    {
        return $this->dbNewOwnerInfo;
    }


    /**
     * @param tDbOwnerInfoExt2 $dbNewOwnerInfo
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput2
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
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput2
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
     * @return \Defr\CzechDataBox\Api\tUpdateDBInput2
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }

}
