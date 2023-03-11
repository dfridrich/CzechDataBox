<?php

namespace Defr\CzechDataBox\Api;

class tPDZRecArray
{

    /**
     * @var tPDZRec $dbPDZRecord
     */
    protected $dbPDZRecord = null;

    /**
     * @param tPDZRec $dbPDZRecord
     */
    public function __construct($dbPDZRecord = null)
    {
        $this->dbPDZRecord = $dbPDZRecord;
    }


    /**
     * @return tPDZRec
     */
    public function getDbPDZRecord()
    {
        return $this->dbPDZRecord;
    }


    /**
     * @param tPDZRec $dbPDZRecord
     * @return \Defr\CzechDataBox\Api\tPDZRecArray
     */
    public function setDbPDZRecord($dbPDZRecord)
    {
        $this->dbPDZRecord = $dbPDZRecord;
        return $this;
    }

}
