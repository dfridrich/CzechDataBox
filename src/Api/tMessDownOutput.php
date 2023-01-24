<?php

namespace Defr\CzechDataBox\Api;

class tMessDownOutput
{

    /**
     * @param tReturnedMessage $dmReturnedMessage
     * @param tStatus $dmStatus
     */
    public function __construct(protected $dmReturnedMessage = null, protected $dmStatus = null)
    {
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
