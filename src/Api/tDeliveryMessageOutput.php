<?php

namespace Defr\CzechDataBox\Api;

class tDeliveryMessageOutput
{

    /**
     * @param tDelivery $dmDelivery
     * @param tStatus $dmStatus
     */
    public function __construct(protected $dmDelivery = null, protected $dmStatus = null)
    {
    }


    /**
     * @return tDelivery
     */
    public function getDmDelivery()
    {
        return $this->dmDelivery;
    }


    /**
     * @param tDelivery $dmDelivery
     * @return \Defr\CzechDataBox\Api\tDeliveryMessageOutput
     */
    public function setDmDelivery($dmDelivery)
    {
        $this->dmDelivery = $dmDelivery;
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
     * @return \Defr\CzechDataBox\Api\tDeliveryMessageOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
