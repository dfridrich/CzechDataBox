<?php

namespace Defr\CzechDataBox\Api;

class tFindDBOuput2
{

    /**
     * @var tDbOwnersArray2 $dbResults
     */
    protected $dbResults = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tDbOwnersArray2 $dbResults
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbResults = null, $dbStatus = null)
    {
        $this->dbResults = $dbResults;
        $this->dbStatus = $dbStatus;
    }


    /**
     * @return tDbOwnersArray2
     */
    public function getDbResults()
    {
        return $this->dbResults;
    }


    /**
     * @param tDbOwnersArray2 $dbResults
     * @return \Defr\CzechDataBox\Api\tFindDBOuput2
     */
    public function setDbResults($dbResults)
    {
        $this->dbResults = $dbResults;
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
     * @return \Defr\CzechDataBox\Api\tFindDBOuput2
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
