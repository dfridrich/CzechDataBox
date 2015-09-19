<?php

namespace Defr\CzechDataBox\Api;

class dmXMLContent
{
    /**
     * @var string
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any = null)
    {
        $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param string $any
     *
     * @return \Defr\CzechDataBox\Api\dmXMLContent
     */
    public function setAny($any)
    {
        $this->any = $any;

        return $this;
    }
}
