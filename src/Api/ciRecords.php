<?php

namespace Defr\CzechDataBox\Api;

class ciRecords
{

    /**
     * @var tCiRecord $ciRecord
     */
    protected $ciRecord = null;

    /**
     * @param tCiRecord $ciRecord
     */
    public function __construct($ciRecord = null)
    {
        $this->ciRecord = $ciRecord;
    }

    /**
     * @return tCiRecord
     */
    public function getCiRecord()
    {
        return $this->ciRecord;
    }

    /**
     * @param tCiRecord $ciRecord
     * @return \Defr\CzechDataBox\Api\ciRecords
     */
    public function setCiRecord($ciRecord)
    {
        $this->ciRecord = $ciRecord;
        return $this;
    }
}
