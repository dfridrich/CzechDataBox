<?php

namespace Defr\CzechDataBox\Api;

use DateTime;
use Exception;

class tGetStateChangesInput
{

    protected DateTime $dmFromTime = null;

    protected DateTime $dmToTime = null;

    public function __construct(DateTime $dmFromTime = null, DateTime $dmToTime = null)
    {
        $this->dmFromTime = $dmFromTime !== null ? $dmFromTime->format(DateTime::ATOM) : null;
        $this->dmToTime = $dmToTime !== null ? $dmToTime->format(DateTime::ATOM) : null;
    }


    /**
     * @return \DateTime
     */
    public function getDmFromTime()
    {
        if ($this->dmFromTime == null) {
            return null;
        } else {
            try {
                return new DateTime($this->dmFromTime);
            } catch (Exception) {
                return false;
            }
        }
    }


    /**
     * @return \Defr\CzechDataBox\Api\tGetStateChangesInput
     */
    public function setDmFromTime(DateTime $dmFromTime)
    {
        $this->dmFromTime = $dmFromTime->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getDmToTime()
    {
        if ($this->dmToTime == null) {
            return null;
        } else {
            try {
                return new DateTime($this->dmToTime);
            } catch (Exception) {
                return false;
            }
        }
    }


    /**
     * @return \Defr\CzechDataBox\Api\tGetStateChangesInput
     */
    public function setDmToTime(DateTime $dmToTime)
    {
        $this->dmToTime = $dmToTime->format(DateTime::ATOM);
        return $this;
    }

}
