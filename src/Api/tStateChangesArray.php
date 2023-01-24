<?php

namespace Defr\CzechDataBox\Api;

class tStateChangesArray
{

    /**
     * @param tStateChangesRecord $dmRecord
     */
    public function __construct(protected $dmRecord = null)
    {
    }


    /**
     * @return tStateChangesRecord
     */
    public function getDmRecord()
    {
        return $this->dmRecord;
    }


    /**
     * @param tStateChangesRecord $dmRecord
     * @return \Defr\CzechDataBox\Api\tStateChangesArray
     */
    public function setDmRecord($dmRecord)
    {
        $this->dmRecord = $dmRecord;
        return $this;
    }

}
