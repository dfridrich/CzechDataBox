<?php

namespace Defr\CzechDataBox\Api;

class tMessDownOutput
{

    /**
     * @var tReturnedMessage $dmReturnedMessage
     */
    protected $dmReturnedMessage = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tReturnedMessage $dmReturnedMessage
     * @param tStatus $dmStatus
     */
    public function __construct($dmReturnedMessage = null, $dmStatus = null)
    {
        $this->dmReturnedMessage = $dmReturnedMessage;
        $this->dmStatus = $dmStatus;
    }


    /**
     * @return tReturnedMessage
     */
    public function getDmReturnedMessage()
    {
        return $this->dmReturnedMessage;
    }


    /**
     * @param tReturnedMessage $dmReturnedMessage
     * @return \Defr\CzechDataBox\Api\tMessDownOutput
     */
    public function setDmReturnedMessage($dmReturnedMessage)
    {
        $this->dmReturnedMessage = $dmReturnedMessage;
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
     * @return \Defr\CzechDataBox\Api\tMessDownOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
