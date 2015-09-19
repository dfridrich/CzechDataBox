<?php

namespace Defr\CzechDataBox\Api;

class tFindDBOuput
{
    /**
     * @var tDbOwnersArray
     */
    protected $dbResults = null;

    /**
     * @var tDbReqStatus
     */
    protected $dbStatus = null;

    /**
     * @param tDbOwnersArray $dbResults
     * @param tDbReqStatus   $dbStatus
     */
    public function __construct($dbResults = null, $dbStatus = null)
    {
        $this->dbResults = $dbResults;
        $this->dbStatus = $dbStatus;
    }

    /**
     * @return tDbOwnersArray
     */
    public function getDbResults()
    {
        return $this->dbResults;
    }

    /**
     * @param tDbOwnersArray $dbResults
     *
     * @return \Defr\CzechDataBox\Api\tFindDBOuput
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
     *
     * @return \Defr\CzechDataBox\Api\tFindDBOuput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;

        return $this;
    }
}
