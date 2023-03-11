<?php

namespace Defr\CzechDataBox\Api;

class BigMessageDownloadResponse
{

    /**
     * @var dmReturnedMessage $dmReturnedMessage
     */
    protected $dmReturnedMessage = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param dmReturnedMessage $dmReturnedMessage
     * @param tStatus $dmStatus
     */
    public function __construct($dmReturnedMessage = null, $dmStatus = null)
    {
        $this->dmReturnedMessage = $dmReturnedMessage;
        $this->dmStatus = $dmStatus;
    }

    /**
     * @return dmReturnedMessage
     */
    public function getDmReturnedMessage()
    {
        return $this->dmReturnedMessage;
    }

    /**
     * @param dmReturnedMessage $dmReturnedMessage
     * @return \Defr\CzechDataBox\Api\BigMessageDownloadResponse
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
     * @return \Defr\CzechDataBox\Api\BigMessageDownloadResponse
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }
}
