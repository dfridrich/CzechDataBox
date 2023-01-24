<?php

namespace Defr\CzechDataBox\Api;

class tMultipleStatus
{

    /**
     * @param tMStatus $dmSingleStatus
     */
    public function __construct(protected $dmSingleStatus = null)
    {
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
     * @return \Defr\CzechDataBox\Api\tMultipleStatus
     */
    public function setDmSingleStatus($dmSingleStatus)
    {
        $this->dmSingleStatus = $dmSingleStatus;
        return $this;
    }

}
