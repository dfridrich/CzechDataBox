<?php

namespace Defr\CzechDataBox\Api;

class tEventsArray
{
    /**
     * @var tEvent
     */
    protected $dmEvent = null;

    /**
     * @param tEvent $dmEvent
     */
    public function __construct($dmEvent = null)
    {
        $this->dmEvent = $dmEvent;
    }

    /**
     * @return tEvent
     */
    public function getDmEvent()
    {
        return $this->dmEvent;
    }

    /**
     * @param tEvent $dmEvent
     *
     * @return \Defr\CzechDataBox\Api\tEventsArray
     */
    public function setDmEvent($dmEvent)
    {
        $this->dmEvent = $dmEvent;

        return $this;
    }
}
