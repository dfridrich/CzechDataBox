<?php

namespace Defr\CzechDataBox\Api;

class tMarkMessOutput
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
     * @return \Defr\CzechDataBox\Api\tMarkMessOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
