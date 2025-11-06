<?php

namespace Defr\CzechDataBox\Api;

class tNtfRecord
{

    /**
     * @var int $ntfType
     */
    protected $ntfType = null;

    /**
     * @var tIdDm $dmID
     */
    protected $dmID = null;

    /**
     * @var int $dmPersonalDelivery
     */
    protected $dmPersonalDelivery = null;

    /**
     * @var \DateTime $dmDeliveryTime
     */
    protected $dmDeliveryTime = null;

    /**
     * @var tIdDb $dbIDRecipient
     */
    protected $dbIDRecipient = null;

    /**
     * @var string $dmAnnotation
     */
    protected $dmAnnotation = null;

    /**
     * @var tIdDb $dbIDSender
     */
    protected $dbIDSender = null;

    /**
     * @var string $dmSender
     */
    protected $dmSender = null;

    /**
     * @param int $ntfType
     * @param tIdDm $dmID
     * @param int $dmPersonalDelivery
     * @param \DateTime $dmDeliveryTime
     * @param tIdDb $dbIDRecipient
     * @param string $dmAnnotation
     * @param tIdDb $dbIDSender
     * @param string $dmSender
     */
    public function __construct($ntfType = null, $dmID = null, $dmPersonalDelivery = null, \DateTime $dmDeliveryTime = null, $dbIDRecipient = null, $dmAnnotation = null, $dbIDSender = null, $dmSender = null)
    {
        $this->ntfType = $ntfType;
        $this->dmID = $dmID;
        $this->dmPersonalDelivery = $dmPersonalDelivery;
        $this->dmDeliveryTime = $dmDeliveryTime ? $dmDeliveryTime->format(\DateTime::ATOM) : null;
        $this->dbIDRecipient = $dbIDRecipient;
        $this->dmAnnotation = $dmAnnotation;
        $this->dbIDSender = $dbIDSender;
        $this->dmSender = $dmSender;
    }

    /**
     * @return int
     */
    public function getNtfType()
    {
        return $this->ntfType;
    }

    /**
     * @param int $ntfType
     * @return \Defr\CzechDataBox\Api\tNtfRecord
     */
    public function setNtfType($ntfType)
    {
        $this->ntfType = $ntfType;
        return $this;
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
     * @return \Defr\CzechDataBox\Api\tNtfRecord
     */
    public function setDmID($dmID)
    {
        $this->dmID = $dmID;
        return $this;
    }

    /**
     * @return int
     */
    public function getDmPersonalDelivery()
    {
        return $this->dmPersonalDelivery;
    }

    /**
     * @param int $dmPersonalDelivery
     * @return \Defr\CzechDataBox\Api\tNtfRecord
     */
    public function setDmPersonalDelivery($dmPersonalDelivery)
    {
        $this->dmPersonalDelivery = $dmPersonalDelivery;
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
     * @return \Defr\CzechDataBox\Api\tNtfRecord
     */
    public function setDmDeliveryTime(\DateTime $dmDeliveryTime)
    {
        $this->dmDeliveryTime = $dmDeliveryTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return tIdDb
     */
    public function getDbIDRecipient()
    {
        return $this->dbIDRecipient;
    }

    /**
     * @param tIdDb $dbIDRecipient
     * @return \Defr\CzechDataBox\Api\tNtfRecord
     */
    public function setDbIDRecipient($dbIDRecipient)
    {
        $this->dbIDRecipient = $dbIDRecipient;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmAnnotation()
    {
        return $this->dmAnnotation;
    }

    /**
     * @param string $dmAnnotation
     * @return \Defr\CzechDataBox\Api\tNtfRecord
     */
    public function setDmAnnotation($dmAnnotation)
    {
        $this->dmAnnotation = $dmAnnotation;
        return $this;
    }

    /**
     * @return tIdDb
     */
    public function getDbIDSender()
    {
        return $this->dbIDSender;
    }

    /**
     * @param tIdDb $dbIDSender
     * @return \Defr\CzechDataBox\Api\tNtfRecord
     */
    public function setDbIDSender($dbIDSender)
    {
        $this->dbIDSender = $dbIDSender;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmSender()
    {
        return $this->dmSender;
    }

    /**
     * @param string $dmSender
     * @return \Defr\CzechDataBox\Api\tNtfRecord
     */
    public function setDmSender($dmSender)
    {
        $this->dmSender = $dmSender;
        return $this;
    }
}
