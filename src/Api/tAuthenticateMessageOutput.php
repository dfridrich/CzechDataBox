<?php

namespace Defr\CzechDataBox\Api;

class tAuthenticateMessageOutput
{

    /**
     * @param boolean $dmAuthResult
     * @param tStatus $dmStatus
     */
    public function __construct(protected $dmAuthResult = null, protected $dmStatus = null)
    {
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
     * @return \Defr\CzechDataBox\Api\tAuthenticateMessageOutput
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
     * @return \Defr\CzechDataBox\Api\tAuthenticateMessageOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
