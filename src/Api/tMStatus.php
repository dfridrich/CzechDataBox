<?php

namespace Defr\CzechDataBox\Api;

class tMStatus
{

    /**
     * @var tIdDm $dmID
     */
    protected $dmID = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tIdDm $dmID
     * @param tStatus $dmStatus
     */
    public function __construct($dmID = null, $dmStatus = null)
    {
        $this->dmID = $dmID;
        $this->dmStatus = $dmStatus;
    }


    /**
     * @return tIdDm
     */
    public function getDmID()
    {
        return $this->dmID;
    }


    /**
     * @param tIdDm $dmID
     * @return \Defr\CzechDataBox\Api\tMStatus
     */
    public function setDmID($dmID)
    {
        $this->dmID = $dmID;
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
     * @return \Defr\CzechDataBox\Api\tMStatus
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
