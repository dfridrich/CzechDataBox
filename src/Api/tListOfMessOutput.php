<?php

namespace Defr\CzechDataBox\Api;

class tListOfMessOutput
{

    /**
     * @param tRecordsArray $dmRecords
     * @param tStatus $dmStatus
     */
    public function __construct(protected $dmRecords = null, protected $dmStatus = null)
    {
    }


    /**
     * @return tRecordsArray
     */
    public function getDmRecords()
    {
        return $this->dmRecords;
    }


    /**
     * @param tRecordsArray $dmRecords
     * @return \Defr\CzechDataBox\Api\tListOfMessOutput
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
     * @return \Defr\CzechDataBox\Api\tListOfMessOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
