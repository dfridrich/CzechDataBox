<?php

namespace Defr\CzechDataBox\Api;

class tNtfRecordsArray
{

    /**
     * @var tNtfRecord $ntfRecord
     */
    protected $ntfRecord = null;

    /**
     * @param tNtfRecord $ntfRecord
     */
    public function __construct($ntfRecord = null)
    {
        $this->ntfRecord = $ntfRecord;
    }


    /**
     * @return tNtfRecord
     */
    public function getNtfRecord()
    {
        return $this->ntfRecord;
    }


    /**
     * @param tNtfRecord $ntfRecord
     * @return \Defr\CzechDataBox\Api\tNtfRecordsArray
     */
    public function setNtfRecord($ntfRecord)
    {
        $this->ntfRecord = $ntfRecord;
        return $this;
    }

}
