<?php

namespace Defr\CzechDataBox\Api;

class tListOfMessOutput
{

    /**
     * @var tRecordsArray $dmRecords
     */
    protected $dmRecords = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tRecordsArray $dmRecords
     * @param tStatus $dmStatus
     */
    public function __construct($dmRecords = null, $dmStatus = null)
    {
        $this->dmRecords = $dmRecords;
        $this->dmStatus = $dmStatus;
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
