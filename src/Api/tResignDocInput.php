<?php

namespace Defr\CzechDataBox\Api;

class tResignDocInput
{

    /**
     * @var base64Binary $dmDoc
     */
    protected $dmDoc = null;

    /**
     * @param base64Binary $dmDoc
     */
    public function __construct($dmDoc = null)
    {
        $this->dmDoc = $dmDoc;
    }

    /**
     * @return base64Binary
     */
    public function getDmDoc()
    {
        return $this->dmDoc;
    }

    /**
     * @param base64Binary $dmDoc
     * @return \Defr\CzechDataBox\Api\tResignDocInput
     */
    public function setDmDoc($dmDoc)
    {
        $this->dmDoc = $dmDoc;
        return $this;
    }
}
