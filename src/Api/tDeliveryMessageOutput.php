<?php

namespace Defr\CzechDataBox\Api;

class tDeliveryMessageOutput
{

    /**
     * @var tDelivery $dmDelivery
     */
    protected $dmDelivery = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tDelivery $dmDelivery
     * @param tStatus $dmStatus
     */
    public function __construct($dmDelivery = null, $dmStatus = null)
    {
        $this->dmDelivery = $dmDelivery;
        $this->dmStatus = $dmStatus;
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
