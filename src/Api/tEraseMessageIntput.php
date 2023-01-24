<?php

namespace Defr\CzechDataBox\Api;

class tEraseMessageIntput
{

    protected tIdDm $dmID = null;

    /**
     * @param tIdDm $dmID
     * @param boolean $dmIncoming
     */
    public function __construct($dmID = null, protected $dmIncoming = null)
    {
        $this->dmID = $dmID;
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
     * @return \Defr\CzechDataBox\Api\tEraseMessageIntput
     */
    public function setDmID($dmID)
    {
        $this->dmID = $dmID;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDmIncoming()
    {
        return $this->dmIncoming;
    }


    /**
     * @param boolean $dmIncoming
     * @return \Defr\CzechDataBox\Api\tEraseMessageIntput
     */
    public function setDmIncoming($dmIncoming)
    {
        $this->dmIncoming = $dmIncoming;
        return $this;
    }

}
