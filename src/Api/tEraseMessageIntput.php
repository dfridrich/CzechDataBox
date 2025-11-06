<?php

namespace Defr\CzechDataBox\Api;

class tEraseMessageIntput
{

    /**
     * @var tIdDm $dmID
     */
    protected $dmID = null;

    /**
     * @var boolean $dmIncoming
     */
    protected $dmIncoming = null;

    /**
     * @param tIdDm $dmID
     * @param boolean $dmIncoming
     */
    public function __construct($dmID = null, $dmIncoming = null)
    {
      $this->dmID = $dmID;
      $this->dmIncoming = $dmIncoming;
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
