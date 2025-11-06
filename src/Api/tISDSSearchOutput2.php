<?php

namespace Defr\CzechDataBox\Api;

class tISDSSearchOutput2
{

    /**
     * @var int $totalCount
     */
    protected $totalCount = null;

    /**
     * @var int $currentCount
     */
    protected $currentCount = null;

    /**
     * @var int $position
     */
    protected $position = null;

    /**
     * @var boolean $lastPage
     */
    protected $lastPage = null;

    /**
     * @var tdbResultsArray2 $dbResults
     */
    protected $dbResults = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param int $totalCount
     * @param int $currentCount
     * @param int $position
     * @param boolean $lastPage
     * @param tdbResultsArray2 $dbResults
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($totalCount = null, $currentCount = null, $position = null, $lastPage = null, $dbResults = null, $dbStatus = null)
    {
      $this->totalCount = $totalCount;
      $this->currentCount = $currentCount;
      $this->position = $position;
      $this->lastPage = $lastPage;
      $this->dbResults = $dbResults;
      $this->dbStatus = $dbStatus;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->totalCount;
    }

    /**
     * @param int $totalCount
     * @return \Defr\CzechDataBox\Api\tISDSSearchOutput2
     */
    public function setTotalCount($totalCount)
    {
      $this->totalCount = $totalCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrentCount()
    {
      return $this->currentCount;
    }

    /**
     * @param int $currentCount
     * @return \Defr\CzechDataBox\Api\tISDSSearchOutput2
     */
    public function setCurrentCount($currentCount)
    {
      $this->currentCount = $currentCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param int $position
     * @return \Defr\CzechDataBox\Api\tISDSSearchOutput2
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLastPage()
    {
      return $this->lastPage;
    }

    /**
     * @param boolean $lastPage
     * @return \Defr\CzechDataBox\Api\tISDSSearchOutput2
     */
    public function setLastPage($lastPage)
    {
      $this->lastPage = $lastPage;
      return $this;
    }

    /**
     * @return tdbResultsArray2
     */
    public function getDbResults()
    {
      return $this->dbResults;
    }

    /**
     * @param tdbResultsArray2 $dbResults
     * @return \Defr\CzechDataBox\Api\tISDSSearchOutput2
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
     * @return \Defr\CzechDataBox\Api\tISDSSearchOutput2
     */
    public function setDbStatus($dbStatus)
    {
      $this->dbStatus = $dbStatus;
      return $this;
    }

}
