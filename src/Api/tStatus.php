<?php

namespace Defr\CzechDataBox\Api;

class tStatus
{

    /**
     * @param string $dmStatusCode
     * @param string $dmStatusMessage
     */
    public function __construct(protected $dmStatusCode = null, protected $dmStatusMessage = null)
    {
    }


    /**
     * @return string
     */
    public function getDmStatusCode()
    {
        return $this->dmStatusCode;
    }


    /**
     * @param string $dmStatusCode
     * @return \Defr\CzechDataBox\Api\tStatus
     */
    public function setDmStatusCode($dmStatusCode)
    {
        $this->dmStatusCode = $dmStatusCode;
        return $this;
    }


    /**
     * @return string
     */
    public function getDmStatusMessage()
    {
        return $this->dmStatusMessage;
    }


    /**
     * @param string $dmStatusMessage
     * @return \Defr\CzechDataBox\Api\tStatus
     */
    public function setDmStatusMessage($dmStatusMessage)
    {
        $this->dmStatusMessage = $dmStatusMessage;
        return $this;
    }

}
