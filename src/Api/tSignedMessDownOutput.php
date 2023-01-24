<?php

namespace Defr\CzechDataBox\Api;

class tSignedMessDownOutput
{

    protected base64Binary $dmSignature = null;

    /**
     * @param base64Binary $dmSignature
     * @param tStatus $dmStatus
     */
    public function __construct($dmSignature = null, protected $dmStatus = null)
    {
        $this->dmSignature = $dmSignature;
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
     * @return \Defr\CzechDataBox\Api\tSignedMessDownOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
