<?php

namespace Defr\CzechDataBox\Api;

class tGetDBListInput
{

    /**
     * @param string $dblType
     */
    public function __construct(protected $dblType = null)
    {
    }


    /**
     * @return string
     */
    public function getDblType()
    {
        return $this->dblType;
    }


    /**
     * @param string $dblType
     * @return \Defr\CzechDataBox\Api\tGetDBListInput
     */
    public function setDblType($dblType)
    {
        $this->dblType = $dblType;
        return $this;
    }

}
