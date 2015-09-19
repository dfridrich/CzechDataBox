<?php

namespace Defr\CzechDataBox\Api;

class tRecordsArray
{
    /**
     * @var tRecord
     */
    protected $dmRecord = null;

    /**
     * @param tRecord $dmRecord
     */
    public function __construct($dmRecord = null)
    {
        $this->dmRecord = $dmRecord;
    }

    /**
     * @return tRecord
     */
    public function getDmRecord()
    {
        return $this->dmRecord;
    }

    /**
     * @param tRecord $dmRecord
     *
     * @return \Defr\CzechDataBox\Api\tRecordsArray
     */
    public function setDmRecord($dmRecord)
    {
        $this->dmRecord = $dmRecord;

        return $this;
    }
}
