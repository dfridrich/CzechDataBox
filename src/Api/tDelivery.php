<?php

namespace Defr\CzechDataBox\Api;

use DateTime;
use Exception;

class tDelivery
{

    protected base64Binary $dmQTimestamp = null;

    protected DateTime $dmDeliveryTime = null;

    protected DateTime $dmAcceptanceTime = null;

    /**
     * @param dmDm $dmDm
     * @param tHash $dmHash
     * @param base64Binary $dmQTimestamp
     * @param int $dmMessageStatus
     * @param tEventsArray $dmEvents
     */
    public function __construct(protected $dmDm = null, protected $dmHash = null, $dmQTimestamp = null, DateTime $dmDeliveryTime = null, DateTime $dmAcceptanceTime = null, protected $dmMessageStatus = null, protected $dmEvents = null)
    {
        $this->dmQTimestamp = $dmQTimestamp;
        $this->dmDeliveryTime = $dmDeliveryTime !== null ? $dmDeliveryTime->format(DateTime::ATOM) : null;
        $this->dmAcceptanceTime = $dmAcceptanceTime !== null ? $dmAcceptanceTime->format(DateTime::ATOM) : null;
    }


    /**
     * @return dmDm
     */
    public function getDmDm()
    {
        return $this->dmDm;
    }


    /**
     * @param dmDm $dmDm
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmDm($dmDm)
    {
        $this->dmDm = $dmDm;
        return $this;
    }


    /**
     * @return tHash
     */
    public function getDmHash()
    {
        return $this->dmHash;
    }


    /**
     * @param tHash $dmHash
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmHash($dmHash)
    {
        $this->dmHash = $dmHash;
        return $this;
    }


    /**
     * @return base64Binary
     */
    public function getDmQTimestamp()
    {
        return $this->dmQTimestamp;
    }


    /**
     * @param base64Binary $dmQTimestamp
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmQTimestamp($dmQTimestamp)
    {
        $this->dmQTimestamp = $dmQTimestamp;
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getDmDeliveryTime()
    {
        if ($this->dmDeliveryTime == null) {
            return null;
        } else {
            try {
                return new DateTime($this->dmDeliveryTime);
            } catch (Exception) {
                return false;
            }
        }
    }


    /**
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmDeliveryTime(DateTime $dmDeliveryTime)
    {
        $this->dmDeliveryTime = $dmDeliveryTime->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getDmAcceptanceTime()
    {
        if ($this->dmAcceptanceTime == null) {
            return null;
        } else {
            try {
                return new DateTime($this->dmAcceptanceTime);
            } catch (Exception) {
                return false;
            }
        }
    }


    /**
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmAcceptanceTime(DateTime $dmAcceptanceTime)
    {
        $this->dmAcceptanceTime = $dmAcceptanceTime->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return int
     */
    public function getDmMessageStatus()
    {
        return $this->dmMessageStatus;
    }


    /**
     * @param int $dmMessageStatus
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmMessageStatus($dmMessageStatus)
    {
        $this->dmMessageStatus = $dmMessageStatus;
        return $this;
    }


    /**
     * @return tEventsArray
     */
    public function getDmEvents()
    {
        return $this->dmEvents;
    }


    /**
     * @param tEventsArray $dmEvents
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmEvents($dmEvents)
    {
        $this->dmEvents = $dmEvents;
        return $this;
    }

}
