<?php

namespace Defr\CzechDataBox\Api;

class tPDZInfoOutput
{

    /**
     * @var tPDZRecArray $dbPDZRecords
     */
    protected $dbPDZRecords = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tPDZRecArray $dbPDZRecords
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbPDZRecords = null, $dbStatus = null)
    {
        $this->dbPDZRecords = $dbPDZRecords;
        $this->dbStatus = $dbStatus;
    }


    /**
     * @return tPDZRecArray
     */
    public function getDbPDZRecords()
    {
        return $this->dbPDZRecords;
    }


    /**
     * @param tPDZRecArray $dbPDZRecords
     * @return \Defr\CzechDataBox\Api\tPDZInfoOutput
     */
    public function setDbPDZRecords($dbPDZRecords)
    {
        $this->dbPDZRecords = $dbPDZRecords;
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
     * @return \Defr\CzechDataBox\Api\tPDZInfoOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
