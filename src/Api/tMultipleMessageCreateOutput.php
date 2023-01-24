<?php

namespace Defr\CzechDataBox\Api;

class tMultipleMessageCreateOutput
{

    /**
     * @param tMultipleStatus $dmMultipleStatus
     * @param tStatus $dmStatus
     */
    public function __construct(protected $dmMultipleStatus = null, protected $dmStatus = null)
    {
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
