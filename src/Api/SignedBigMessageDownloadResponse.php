<?php

namespace Defr\CzechDataBox\Api;

class SignedBigMessageDownloadResponse
{

    /**
     * @var base64Binary $dmSignature
     */
    protected $dmSignature = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param base64Binary $dmSignature
     * @param tStatus $dmStatus
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
     * @return \Defr\CzechDataBox\Api\SignedBigMessageDownloadResponse
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
     * @return \Defr\CzechDataBox\Api\SignedBigMessageDownloadResponse
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
