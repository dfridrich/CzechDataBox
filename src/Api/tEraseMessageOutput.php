<?php

namespace Defr\CzechDataBox\Api;

class tEraseMessageOutput
{

    /**
     * @param tStatus $dmStatus
     */
    public function __construct(protected $dmStatus = null)
    {
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
