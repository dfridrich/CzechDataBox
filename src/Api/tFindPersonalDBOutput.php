<?php

namespace Defr\CzechDataBox\Api;

class tFindPersonalDBOutput
{

    /**
     * @var tdbPersOwnersArray $dbResults
     */
    protected $dbResults = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tdbPersOwnersArray $dbResults
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbResults = null, $dbStatus = null)
    {
        $this->dbResults = $dbResults;
        $this->dbStatus = $dbStatus;
    }


    /**
     * @return tdbPersOwnersArray
     */
    public function getDbResults()
    {
        return $this->dbResults;
    }


    /**
     * @param tdbPersOwnersArray $dbResults
     * @return \Defr\CzechDataBox\Api\tFindPersonalDBOutput
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
     * @return \Defr\CzechDataBox\Api\tFindPersonalDBOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
