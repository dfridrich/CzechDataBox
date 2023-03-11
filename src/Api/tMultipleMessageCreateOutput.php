<?php

namespace Defr\CzechDataBox\Api;

class tMultipleMessageCreateOutput
{

    /**
     * @var tMultipleStatus $dmMultipleStatus
     */
    protected $dmMultipleStatus = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tMultipleStatus $dmMultipleStatus
     * @param tStatus $dmStatus
     */
    public function __construct($dmMultipleStatus = null, $dmStatus = null)
    {
        $this->dmMultipleStatus = $dmMultipleStatus;
        $this->dmStatus = $dmStatus;
    }

    /**
     * @return tMultipleStatus
     */
    public function getDmMultipleStatus()
    {
        return $this->dmMultipleStatus;
    }

    /**
     * @param tMultipleStatus $dmMultipleStatus
     * @return \Defr\CzechDataBox\Api\tMultipleMessageCreateOutput
     */
    public function setDmMultipleStatus($dmMultipleStatus)
    {
        $this->dmMultipleStatus = $dmMultipleStatus;
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageCreateOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }
}
