<?php

namespace Defr\CzechDataBox\Api;

class dmXMLContent
{

    /**
     * @param string $any
     */
    public function __construct(protected $any = null)
    {
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
     * @return \Defr\CzechDataBox\Api\dmXMLContent
     */
    public function setAny($any)
    {
        $this->any = $any;
        return $this;
    }

}
