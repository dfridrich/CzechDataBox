<?php

namespace Defr\CzechDataBox\Api;

class tEventsArray
{

    /**
     * @param tEvent $dmEvent
     */
    public function __construct(protected $dmEvent = null)
    {
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
     * @return \Defr\CzechDataBox\Api\tEventsArray
     */
    public function setDmEvent($dmEvent)
    {
        $this->dmEvent = $dmEvent;
        return $this;
    }

}
