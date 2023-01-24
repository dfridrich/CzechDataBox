<?php

namespace Defr\CzechDataBox\Api;

class tFindDBOuput
{

    /**
     * @param tDbOwnersArray $dbResults
     * @param tDbReqStatus $dbStatus
     */
    public function __construct(protected $dbResults = null, protected $dbStatus = null)
    {
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
     * @return \Defr\CzechDataBox\Api\tFindDBOuput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
