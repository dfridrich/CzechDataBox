<?php

namespace Defr\CzechDataBox\Api;

class tResignDocOutput
{

    protected base64Binary $dmResultDoc = null;

    protected date $dmValidTo = null;

    /**
     * @param base64Binary $dmResultDoc
     * @param date $dmValidTo
     * @param tStatus $dmStatus
     */
    public function __construct($dmResultDoc = null, $dmValidTo = null, protected $dmStatus = null)
    {
        $this->dmResultDoc = $dmResultDoc;
        $this->dmValidTo = $dmValidTo;
    }


    /**
     * @return base64Binary
     */
    public function getDmResultDoc()
    {
        return $this->dmResultDoc;
    }


    /**
     * @param base64Binary $dmResultDoc
     * @return \Defr\CzechDataBox\Api\tResignDocOutput
     */
    public function setDmResultDoc($dmResultDoc)
    {
        $this->dmResultDoc = $dmResultDoc;
        return $this;
    }


    /**
     * @return date
     */
    public function getDmValidTo()
    {
        return $this->dmValidTo;
    }


    /**
     * @param date $dmValidTo
     * @return \Defr\CzechDataBox\Api\tResignDocOutput
     */
    public function setDmValidTo($dmValidTo)
    {
        $this->dmValidTo = $dmValidTo;
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
     * @return \Defr\CzechDataBox\Api\tResignDocOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
