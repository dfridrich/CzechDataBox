<?php

namespace Defr\CzechDataBox\Api;

class tPDZSendOutput
{

    /**
     * @var boolean $PDZsiResult
     */
    protected $PDZsiResult = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param boolean $PDZsiResult
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($PDZsiResult = null, $dbStatus = null)
    {
      $this->PDZsiResult = $PDZsiResult;
      $this->dbStatus = $dbStatus;
    }

    /**
     * @return boolean
     */
    public function getPDZsiResult()
    {
      return $this->PDZsiResult;
    }

    /**
     * @param boolean $PDZsiResult
     * @return \Defr\CzechDataBox\Api\tPDZSendOutput
     */
    public function setPDZsiResult($PDZsiResult)
    {
      $this->PDZsiResult = $PDZsiResult;
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
     * @return \Defr\CzechDataBox\Api\tPDZSendOutput
     */
    public function setDbStatus($dbStatus)
    {
      $this->dbStatus = $dbStatus;
      return $this;
    }

}
