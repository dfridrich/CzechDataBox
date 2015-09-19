<?php

namespace Defr\CzechDataBox\Api;

class tMultipleStatus
{
    /**
     * @var tMStatus
     */
    protected $dmSingleStatus = null;

    /**
     * @param tMStatus $dmSingleStatus
     */
    public function __construct($dmSingleStatus = null)
    {
        $this->dmSingleStatus = $dmSingleStatus;
    }

    /**
     * @return tMStatus
     */
    public function getDmSingleStatus()
    {
        return $this->dmSingleStatus;
    }

    /**
     * @param tMStatus $dmSingleStatus
     *
     * @return \Defr\CzechDataBox\Api\tMultipleStatus
     */
    public function setDmSingleStatus($dmSingleStatus)
    {
        $this->dmSingleStatus = $dmSingleStatus;

        return $this;
    }
}
