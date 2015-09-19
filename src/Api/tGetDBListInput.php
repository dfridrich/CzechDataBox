<?php

namespace Defr\CzechDataBox\Api;

class tGetDBListInput
{
    /**
     * @var string
     */
    protected $dblType = null;

    /**
     * @param string $dblType
     */
    public function __construct($dblType = null)
    {
        $this->dblType = $dblType;
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
     *
     * @return \Defr\CzechDataBox\Api\tGetDBListInput
     */
    public function setDblType($dblType)
    {
        $this->dblType = $dblType;

        return $this;
    }
}
