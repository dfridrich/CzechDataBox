<?php

namespace Defr\CzechDataBox\Api;

use DateTime;
use Exception;

class tEvent
{

    protected DateTime $dmEventTime = null;

    /**
     * @param string $dmEventDescr
     */
    public function __construct(DateTime $dmEventTime = null, protected $dmEventDescr = null)
    {
        $this->dmEventTime = $dmEventTime !== null ? $dmEventTime->format(DateTime::ATOM) : null;
    }


    /**
     * @return \DateTime
     */
    public function getDmEventTime()
    {
        if ($this->dmEventTime == null) {
            return null;
        } else {
            try {
                return new DateTime($this->dmEventTime);
            } catch (Exception) {
                return false;
            }
        }
    }


    /**
     * @return \Defr\CzechDataBox\Api\tEvent
     */
    public function setDmEventTime(DateTime $dmEventTime)
    {
        $this->dmEventTime = $dmEventTime->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return string
     */
    public function getDmEventDescr()
    {
        return $this->dmEventDescr;
    }


    /**
     * @param string $dmEventDescr
     * @return \Defr\CzechDataBox\Api\tEvent
     */
    public function setDmEventDescr($dmEventDescr)
    {
        $this->dmEventDescr = $dmEventDescr;
        return $this;
    }

}
