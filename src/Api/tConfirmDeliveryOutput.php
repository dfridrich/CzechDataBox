<?php

namespace Defr\CzechDataBox\Api;

class tConfirmDeliveryOutput
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
     * @return \Defr\CzechDataBox\Api\tConfirmDeliveryOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
