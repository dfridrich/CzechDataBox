<?php

namespace Defr\CzechDataBox\Api;

class tPDZRecArray
{

    /**
     * @param tPDZRec $dbPDZRecord
     */
    public function __construct(protected $dbPDZRecord = null)
    {
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
