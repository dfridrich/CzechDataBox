<?php

namespace Defr\CzechDataBox\Api;

class tListForNotifOutput
{

    /**
     * @var tNtfRecordsArray $ntfRecords
     */
    protected $ntfRecords = null;

    /**
     * @var boolean $ntfListContinues
     */
    protected $ntfListContinues = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tNtfRecordsArray $ntfRecords
     * @param boolean $ntfListContinues
     * @param tStatus $dmStatus
     */
    public function __construct($ntfRecords = null, $ntfListContinues = null, $dmStatus = null)
    {
        $this->ntfRecords = $ntfRecords;
        $this->ntfListContinues = $ntfListContinues;
        $this->dmStatus = $dmStatus;
    }


    /**
     * @return tNtfRecordsArray
     */
    public function getNtfRecords()
    {
        return $this->ntfRecords;
    }


    /**
     * @param tNtfRecordsArray $ntfRecords
     * @return \Defr\CzechDataBox\Api\tListForNotifOutput
     */
    public function setNtfRecords($ntfRecords)
    {
        $this->ntfRecords = $ntfRecords;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getNtfListContinues()
    {
        return $this->ntfListContinues;
    }


    /**
     * @param boolean $ntfListContinues
     * @return \Defr\CzechDataBox\Api\tListForNotifOutput
     */
    public function setNtfListContinues($ntfListContinues)
    {
        $this->ntfListContinues = $ntfListContinues;
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
     * @return \Defr\CzechDataBox\Api\tListForNotifOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
