<?php

namespace Defr\CzechDataBox\Api;

class tDelivery
{
    /**
     * @var dmDm
     */
    protected $dmDm = null;

    /**
     * @var tHash
     */
    protected $dmHash = null;

    /**
     * @var base64Binary
     */
    protected $dmQTimestamp = null;

    /**
     * @var \DateTime
     */
    protected $dmDeliveryTime = null;

    /**
     * @var \DateTime
     */
    protected $dmAcceptanceTime = null;

    /**
     * @var int
     */
    protected $dmMessageStatus = null;

    /**
     * @var tEventsArray
     */
    protected $dmEvents = null;

    /**
     * @param dmDm         $dmDm
     * @param tHash        $dmHash
     * @param base64Binary $dmQTimestamp
     * @param \DateTime    $dmDeliveryTime
     * @param \DateTime    $dmAcceptanceTime
     * @param int          $dmMessageStatus
     * @param tEventsArray $dmEvents
     */
    public function __construct($dmDm = null, $dmHash = null, $dmQTimestamp = null, \DateTime $dmDeliveryTime = null, \DateTime $dmAcceptanceTime = null, $dmMessageStatus = null, $dmEvents = null)
    {
        $this->dmDm = $dmDm;
        $this->dmHash = $dmHash;
        $this->dmQTimestamp = $dmQTimestamp;
        $this->dmDeliveryTime = $dmDeliveryTime ? $dmDeliveryTime->format(\DateTime::ATOM) : null;
        $this->dmAcceptanceTime = $dmAcceptanceTime ? $dmAcceptanceTime->format(\DateTime::ATOM) : null;
        $this->dmMessageStatus = $dmMessageStatus;
        $this->dmEvents = $dmEvents;
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
     *
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
     *
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
     *
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
            return;
        } else {
            try {
                return new \DateTime($this->dmDeliveryTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dmDeliveryTime
     *
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmDeliveryTime(\DateTime $dmDeliveryTime)
    {
        $this->dmDeliveryTime = $dmDeliveryTime->format(\DateTime::ATOM);

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDmAcceptanceTime()
    {
        if ($this->dmAcceptanceTime == null) {
            return;
        } else {
            try {
                return new \DateTime($this->dmAcceptanceTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dmAcceptanceTime
     *
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmAcceptanceTime(\DateTime $dmAcceptanceTime)
    {
        $this->dmAcceptanceTime = $dmAcceptanceTime->format(\DateTime::ATOM);

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
     *
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
     *
     * @return \Defr\CzechDataBox\Api\tDelivery
     */
    public function setDmEvents($dmEvents)
    {
        $this->dmEvents = $dmEvents;

        return $this;
    }
}
