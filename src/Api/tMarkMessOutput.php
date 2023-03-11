<?php

namespace Defr\CzechDataBox\Api;

class tMarkMessOutput
{

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tStatus $dmStatus
     */
    public function __construct($dmStatus = null)
    {
        $this->dmStatus = $dmStatus;
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
     * @return \Defr\CzechDataBox\Api\tMarkMessOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }
}
