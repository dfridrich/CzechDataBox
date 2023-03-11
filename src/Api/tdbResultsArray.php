<?php

namespace Defr\CzechDataBox\Api;

class tdbResultsArray
{

    /**
     * @var tdbResult $dbResult
     */
    protected $dbResult = null;

    /**
     * @param tdbResult $dbResult
     */
    public function __construct($dbResult = null)
    {
        $this->dbResult = $dbResult;
    }


    /**
     * @return tdbResult
     */
    public function getDbResult()
    {
        return $this->dbResult;
    }


    /**
     * @param tdbResult $dbResult
     * @return \Defr\CzechDataBox\Api\tdbResultsArray
     */
    public function setDbResult($dbResult)
    {
        $this->dbResult = $dbResult;
        return $this;
    }

}
