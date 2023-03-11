<?php

namespace Defr\CzechDataBox\Api;

class tEraseMessageOutput
{

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tStatus $dmStatus
     */
    public function __construct($dmStatus = null)
    {
        $this->dmStatus = $dmStatus;
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
     * @return \Defr\CzechDataBox\Api\tEraseMessageOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
