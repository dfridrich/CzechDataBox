<?php

namespace Defr\CzechDataBox\Api;

class tSignedMessDownOutput
{
    /**
     * @var base64Binary
     */
    protected $dmSignature = null;

    /**
     * @var tStatus
     */
    protected $dmStatus = null;

    /**
     * @param base64Binary $dmSignature
     * @param tStatus      $dmStatus
     */
    public function __construct($dmSignature = null, $dmStatus = null)
    {
        $this->dmSignature = $dmSignature;
        $this->dmStatus = $dmStatus;
    }

    /**
     * @return base64Binary
     */
    public function getDmSignature()
    {
        return $this->dmSignature;
    }

    /**
     * @param base64Binary $dmSignature
     *
     * @return \Defr\CzechDataBox\Api\tSignedMessDownOutput
     */
    public function setDmSignature($dmSignature)
    {
        $this->dmSignature = $dmSignature;

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
     *
     * @return \Defr\CzechDataBox\Api\tSignedMessDownOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;

        return $this;
    }
}
