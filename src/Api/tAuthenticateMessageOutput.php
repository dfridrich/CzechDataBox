<?php

namespace Defr\CzechDataBox\Api;

class tAuthenticateMessageOutput
{
    /**
     * @var bool
     */
    protected $dmAuthResult = null;

    /**
     * @var tStatus
     */
    protected $dmStatus = null;

    /**
     * @param bool    $dmAuthResult
     * @param tStatus $dmStatus
     */
    public function __construct($dmAuthResult = null, $dmStatus = null)
    {
        $this->dmAuthResult = $dmAuthResult;
        $this->dmStatus = $dmStatus;
    }

    /**
     * @return bool
     */
    public function getDmAuthResult()
    {
        return $this->dmAuthResult;
    }

    /**
     * @param bool $dmAuthResult
     *
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
     *
     * @return \Defr\CzechDataBox\Api\tAuthenticateMessageOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;

        return $this;
    }
}
