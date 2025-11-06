<?php

namespace Defr\CzechDataBox\Api;

class tChangeDBsTypeOutput
{

    /**
     * @var base64Binary $changeLogFile
     */
    protected $changeLogFile = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param base64Binary $changeLogFile
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($changeLogFile = null, $dbStatus = null)
    {
      $this->changeLogFile = $changeLogFile;
      $this->dbStatus = $dbStatus;
    }

    /**
     * @return base64Binary
     */
    public function getChangeLogFile()
    {
      return $this->changeLogFile;
    }

    /**
     * @param base64Binary $changeLogFile
     * @return \Defr\CzechDataBox\Api\tChangeDBsTypeOutput
     */
    public function setChangeLogFile($changeLogFile)
    {
      $this->changeLogFile = $changeLogFile;
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
     * @return \Defr\CzechDataBox\Api\tChangeDBsTypeOutput
     */
    public function setDbStatus($dbStatus)
    {
      $this->dbStatus = $dbStatus;
      return $this;
    }

}
