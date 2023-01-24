<?php

namespace Defr\CzechDataBox\Api;

class tPDZInfoOutput
{

    /**
     * @param tPDZRecArray $dbPDZRecords
     * @param tDbReqStatus $dbStatus
     */
    public function __construct(protected $dbPDZRecords = null, protected $dbStatus = null)
    {
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
