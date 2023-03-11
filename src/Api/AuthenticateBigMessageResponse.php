<?php

namespace Defr\CzechDataBox\Api;

class AuthenticateBigMessageResponse
{

    /**
     * @var boolean $dmAuthResult
     */
    protected $dmAuthResult = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param boolean $dmAuthResult
     * @param tStatus $dmStatus
     */
    public function __construct($dmAuthResult = null, $dmStatus = null)
    {
        $this->dmAuthResult = $dmAuthResult;
        $this->dmStatus = $dmStatus;
    }


    /**
     * @return boolean
     */
    public function getDmAuthResult()
    {
        return $this->dmAuthResult;
    }


    /**
     * @param boolean $dmAuthResult
     * @return \Defr\CzechDataBox\Api\AuthenticateBigMessageResponse
     */
    public function setDmAuthResult($dmAuthResult)
    {
        $this->dmAuthResult = $dmAuthResult;
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
     * @return \Defr\CzechDataBox\Api\AuthenticateBigMessageResponse
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
