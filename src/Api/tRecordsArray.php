<?php

namespace Defr\CzechDataBox\Api;

class tRecordsArray
{

    /**
     * @param tRecord $dmRecord
     */
    public function __construct(protected $dmRecord = null)
    {
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
     * @return \Defr\CzechDataBox\Api\tRecordsArray
     */
    public function setDmRecord($dmRecord)
    {
        $this->dmRecord = $dmRecord;
        return $this;
    }

}
