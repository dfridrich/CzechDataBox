<?php

namespace Defr\CzechDataBox\Api;

class constRecords
{

    /**
     * @var tConstRecord $constRecord
     */
    protected $constRecord = null;

    /**
     * @param tConstRecord $constRecord
     */
    public function __construct($constRecord = null)
    {
        $this->constRecord = $constRecord;
    }


    /**
     * @return tConstRecord
     */
    public function getConstRecord()
    {
        return $this->constRecord;
    }


    /**
     * @param tConstRecord $constRecord
     * @return \Defr\CzechDataBox\Api\constRecords
     */
    public function setConstRecord($constRecord)
    {
        $this->constRecord = $constRecord;
        return $this;
    }

}
