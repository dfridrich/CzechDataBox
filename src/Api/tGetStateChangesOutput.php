<?php

namespace Defr\CzechDataBox\Api;

class tGetStateChangesOutput
{

    /**
     * @param tStateChangesArray $dmRecords
     * @param tStatus $dmStatus
     */
    public function __construct(protected $dmRecords = null, protected $dmStatus = null)
    {
    }


    /**
     * @return tStateChangesArray
     */
    public function getDmRecords()
    {
        return $this->dmRecords;
    }


    /**
     * @param tStateChangesArray $dmRecords
     * @return \Defr\CzechDataBox\Api\tGetStateChangesOutput
     */
    public function setDmRecords($dmRecords)
    {
        $this->dmRecords = $dmRecords;
        return $this;
    }


    /**
     * @return tStatus
     */
    public function getDmStatus()
    {
        return $this->dmStatus;
    }


    /**
     * @param tStatus $dmStatus
     * @return \Defr\CzechDataBox\Api\tGetStateChangesOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
