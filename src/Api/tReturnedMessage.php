<?php

namespace Defr\CzechDataBox\Api;

class tReturnedMessage
{

    /**
     * @var dmDm $dmDm
     */
    protected $dmDm = null;

    /**
     * @var tHash $dmHash
     */
    protected $dmHash = null;

    /**
     * @var base64Binary $dmQTimestamp
     */
    protected $dmQTimestamp = null;

    /**
     * @var \DateTime $dmDeliveryTime
     */
    protected $dmDeliveryTime = null;

    /**
     * @var \DateTime $dmAcceptanceTime
     */
    protected $dmAcceptanceTime = null;

    /**
     * @var int $dmMessageStatus
     */
    protected $dmMessageStatus = null;

    /**
     * @var int $dmAttachmentSize
     */
    protected $dmAttachmentSize = null;

    /**
     * @var tDmType $dmType
     */
    protected $dmType = null;

    /**
     * @param dmDm $dmDm
     * @param tHash $dmHash
     * @param base64Binary $dmQTimestamp
     * @param \DateTime|null $dmDeliveryTime
     * @param \DateTime|null $dmAcceptanceTime
     * @param int $dmMessageStatus
     * @param int $dmAttachmentSize
     * @param tDmType $dmType
     */
    public function __construct($dmDm = null, $dmHash = null, $dmQTimestamp = null, ?\DateTime $dmDeliveryTime = null, ?\DateTime $dmAcceptanceTime = null, $dmMessageStatus = null, $dmAttachmentSize = null, $dmType = null)
    {
        $this->dmDm = $dmDm;
        $this->dmHash = $dmHash;
        $this->dmQTimestamp = $dmQTimestamp;
        $this->dmDeliveryTime = $dmDeliveryTime ? $dmDeliveryTime->format(\DateTime::ATOM) : null;
        $this->dmAcceptanceTime = $dmAcceptanceTime ? $dmAcceptanceTime->format(\DateTime::ATOM) : null;
        $this->dmMessageStatus = $dmMessageStatus;
        $this->dmAttachmentSize = $dmAttachmentSize;
        $this->dmType = $dmType;
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
     * @return \Defr\CzechDataBox\Api\tReturnedMessage
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
     * @return \Defr\CzechDataBox\Api\tReturnedMessage
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
     * @return \Defr\CzechDataBox\Api\tReturnedMessage
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
                return new \DateTime($this->dmDeliveryTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dmDeliveryTime
     * @return \Defr\CzechDataBox\Api\tReturnedMessage
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
            return null;
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
     * @return \Defr\CzechDataBox\Api\tReturnedMessage
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
     * @return \Defr\CzechDataBox\Api\tReturnedMessage
     */
    public function setDmMessageStatus($dmMessageStatus)
    {
        $this->dmMessageStatus = $dmMessageStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getDmAttachmentSize()
    {
        return $this->dmAttachmentSize;
    }

    /**
     * @param int $dmAttachmentSize
     * @return \Defr\CzechDataBox\Api\tReturnedMessage
     */
    public function setDmAttachmentSize($dmAttachmentSize)
    {
        $this->dmAttachmentSize = $dmAttachmentSize;
        return $this;
    }

    /**
     * @return tDmType
     */
    public function getDmType()
    {
        return $this->dmType;
    }

    /**
     * @param tDmType $dmType
     * @return \Defr\CzechDataBox\Api\tReturnedMessage
     */
    public function setDmType($dmType)
    {
        $this->dmType = $dmType;
        return $this;
    }
}
