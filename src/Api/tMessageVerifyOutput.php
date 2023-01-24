<?php

namespace Defr\CzechDataBox\Api;

class tMessageVerifyOutput
{

    /**
     * @param tHash $dmHash
     * @param tStatus $dmStatus
     */
    public function __construct(protected $dmHash = null, protected $dmStatus = null)
    {
    }


    /**
     * @return tHash
     */
    public function getDmHash()
    {
        return $this->dmHash;
    }


    /**
     * @param tHash $dmHash
     * @return \Defr\CzechDataBox\Api\tMessageVerifyOutput
     */
    public function setDmHash($dmHash)
    {
        $this->dmHash = $dmHash;
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
     * @return \Defr\CzechDataBox\Api\tMessageVerifyOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
