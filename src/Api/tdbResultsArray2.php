<?php

namespace Defr\CzechDataBox\Api;

class tdbResultsArray2
{

    /**
     * @var tdbResult2 $dbResult
     */
    protected $dbResult = null;

    /**
     * @param tdbResult2 $dbResult
     */
    public function __construct($dbResult = null)
    {
        $this->dbResult = $dbResult;
    }


    /**
     * @return tdbResult2
     */
    public function getDbResult()
    {
        return $this->dbResult;
    }


    /**
     * @param tdbResult2 $dbResult
     * @return \Defr\CzechDataBox\Api\tdbResultsArray2
     */
    public function setDbResult($dbResult)
    {
        $this->dbResult = $dbResult;
        return $this;
    }

}
