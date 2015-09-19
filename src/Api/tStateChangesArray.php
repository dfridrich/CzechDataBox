<?php

namespace Defr\CzechDataBox\Api;

class tStateChangesArray
{
    /**
     * @var tStateChangesRecord
     */
    protected $dmRecord = null;

    /**
     * @param tStateChangesRecord $dmRecord
     */
    public function __construct($dmRecord = null)
    {
        $this->dmRecord = $dmRecord;
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
     *
     * @return \Defr\CzechDataBox\Api\tStateChangesArray
     */
    public function setDmRecord($dmRecord)
    {
        $this->dmRecord = $dmRecord;

        return $this;
    }
}
