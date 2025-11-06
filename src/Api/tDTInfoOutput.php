<?php

namespace Defr\CzechDataBox\Api;

class tDTInfoOutput
{

    /**
     * @var int $ActDTType
     */
    protected $ActDTType = null;

    /**
     * @var int $ActDTCapacity
     */
    protected $ActDTCapacity = null;

    /**
     * @var date $ActDTFrom
     */
    protected $ActDTFrom = null;

    /**
     * @var date $ActDTTo
     */
    protected $ActDTTo = null;

    /**
     * @var int $ActDTCapUsed
     */
    protected $ActDTCapUsed = null;

    /**
     * @var int $FutDTType
     */
    protected $FutDTType = null;

    /**
     * @var int $FutDTCapacity
     */
    protected $FutDTCapacity = null;

    /**
     * @var date $FutDTFrom
     */
    protected $FutDTFrom = null;

    /**
     * @var date $FutDTTo
     */
    protected $FutDTTo = null;

    /**
     * @var int $FutDTPaid
     */
    protected $FutDTPaid = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param int $ActDTType
     * @param int $ActDTCapacity
     * @param date $ActDTFrom
     * @param date $ActDTTo
     * @param int $ActDTCapUsed
     * @param int $FutDTType
     * @param int $FutDTCapacity
     * @param date $FutDTFrom
     * @param date $FutDTTo
     * @param int $FutDTPaid
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($ActDTType = null, $ActDTCapacity = null, $ActDTFrom = null, $ActDTTo = null, $ActDTCapUsed = null, $FutDTType = null, $FutDTCapacity = null, $FutDTFrom = null, $FutDTTo = null, $FutDTPaid = null, $dbStatus = null)
    {
      $this->ActDTType = $ActDTType;
      $this->ActDTCapacity = $ActDTCapacity;
      $this->ActDTFrom = $ActDTFrom;
      $this->ActDTTo = $ActDTTo;
      $this->ActDTCapUsed = $ActDTCapUsed;
      $this->FutDTType = $FutDTType;
      $this->FutDTCapacity = $FutDTCapacity;
      $this->FutDTFrom = $FutDTFrom;
      $this->FutDTTo = $FutDTTo;
      $this->FutDTPaid = $FutDTPaid;
      $this->dbStatus = $dbStatus;
    }

    /**
     * @return int
     */
    public function getActDTType()
    {
      return $this->ActDTType;
    }

    /**
     * @param int $ActDTType
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setActDTType($ActDTType)
    {
      $this->ActDTType = $ActDTType;
      return $this;
    }

    /**
     * @return int
     */
    public function getActDTCapacity()
    {
      return $this->ActDTCapacity;
    }

    /**
     * @param int $ActDTCapacity
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setActDTCapacity($ActDTCapacity)
    {
      $this->ActDTCapacity = $ActDTCapacity;
      return $this;
    }

    /**
     * @return date
     */
    public function getActDTFrom()
    {
      return $this->ActDTFrom;
    }

    /**
     * @param date $ActDTFrom
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setActDTFrom($ActDTFrom)
    {
      $this->ActDTFrom = $ActDTFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getActDTTo()
    {
      return $this->ActDTTo;
    }

    /**
     * @param date $ActDTTo
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setActDTTo($ActDTTo)
    {
      $this->ActDTTo = $ActDTTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getActDTCapUsed()
    {
      return $this->ActDTCapUsed;
    }

    /**
     * @param int $ActDTCapUsed
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setActDTCapUsed($ActDTCapUsed)
    {
      $this->ActDTCapUsed = $ActDTCapUsed;
      return $this;
    }

    /**
     * @return int
     */
    public function getFutDTType()
    {
      return $this->FutDTType;
    }

    /**
     * @param int $FutDTType
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setFutDTType($FutDTType)
    {
      $this->FutDTType = $FutDTType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFutDTCapacity()
    {
      return $this->FutDTCapacity;
    }

    /**
     * @param int $FutDTCapacity
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setFutDTCapacity($FutDTCapacity)
    {
      $this->FutDTCapacity = $FutDTCapacity;
      return $this;
    }

    /**
     * @return date
     */
    public function getFutDTFrom()
    {
      return $this->FutDTFrom;
    }

    /**
     * @param date $FutDTFrom
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setFutDTFrom($FutDTFrom)
    {
      $this->FutDTFrom = $FutDTFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getFutDTTo()
    {
      return $this->FutDTTo;
    }

    /**
     * @param date $FutDTTo
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setFutDTTo($FutDTTo)
    {
      $this->FutDTTo = $FutDTTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getFutDTPaid()
    {
      return $this->FutDTPaid;
    }

    /**
     * @param int $FutDTPaid
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setFutDTPaid($FutDTPaid)
    {
      $this->FutDTPaid = $FutDTPaid;
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
     * @return \Defr\CzechDataBox\Api\tDTInfoOutput
     */
    public function setDbStatus($dbStatus)
    {
      $this->dbStatus = $dbStatus;
      return $this;
    }

}
