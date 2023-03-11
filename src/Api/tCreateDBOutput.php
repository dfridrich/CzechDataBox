<?php

namespace Defr\CzechDataBox\Api;

class tCreateDBOutput
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

    /**
     * @var tUserID $dbUserID
     */
    protected $dbUserID = null;

    /**
     * @var tDbAccessDataId $dbAccessDataId
     */
    protected $dbAccessDataId = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tIdDb $dbID
     * @param tUserID $dbUserID
     * @param tDbAccessDataId $dbAccessDataId
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbID = null, $dbUserID = null, $dbAccessDataId = null, $dbStatus = null)
    {
        $this->dbID = $dbID;
        $this->dbUserID = $dbUserID;
        $this->dbAccessDataId = $dbAccessDataId;
        $this->dbStatus = $dbStatus;
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
     * @return \Defr\CzechDataBox\Api\tCreateDBOutput
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }


    /**
     * @return tUserID
     */
    public function getDbUserID()
    {
        return $this->dbUserID;
    }


    /**
     * @param tUserID $dbUserID
     * @return \Defr\CzechDataBox\Api\tCreateDBOutput
     */
    public function setDbUserID($dbUserID)
    {
        $this->dbUserID = $dbUserID;
        return $this;
    }


    /**
     * @return tDbAccessDataId
     */
    public function getDbAccessDataId()
    {
        return $this->dbAccessDataId;
    }


    /**
     * @param tDbAccessDataId $dbAccessDataId
     * @return \Defr\CzechDataBox\Api\tCreateDBOutput
     */
    public function setDbAccessDataId($dbAccessDataId)
    {
        $this->dbAccessDataId = $dbAccessDataId;
        return $this;
    }


    /**
     * @return tDbReqStatus
     */
    public function getDbStatus()
    {
        return $this->dbStatus;
    }


    /**
     * @param tDbReqStatus $dbStatus
     * @return \Defr\CzechDataBox\Api\tCreateDBOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
