<?php

namespace Defr\CzechDataBox\Api;

class tGetListOfErasedOutput
{

    /**
     * @var string $asyncID
     */
    protected $asyncID = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param string $asyncID
     * @param tStatus $dmStatus
     */
    public function __construct($asyncID = null, $dmStatus = null)
    {
        $this->asyncID = $asyncID;
        $this->dmStatus = $dmStatus;
    }


    /**
     * @return string
     */
    public function getAsyncID()
    {
        return $this->asyncID;
    }


    /**
     * @param string $asyncID
     * @return \Defr\CzechDataBox\Api\tGetListOfErasedOutput
     */
    public function setAsyncID($asyncID)
    {
        $this->asyncID = $asyncID;
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
     * @return \Defr\CzechDataBox\Api\tGetListOfErasedOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
