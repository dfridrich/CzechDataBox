<?php

namespace Defr\CzechDataBox\Api;

use DateTime;
use Exception;

class tRecord
{

    protected dmOrdinal $dmOrdinal = null;

    protected tIdDm $dmID = null;

    protected tIdDb $dbIDSender = null;

    protected dmSender $dmSender = null;

    protected dmSenderAddress $dmSenderAddress = null;

    protected dmRecipient $dmRecipient = null;

    protected dmRecipientAddress $dmRecipientAddress = null;

    protected tIdDb $dbIDRecipient = null;

    protected dmAnnotation $dmAnnotation = null;

    protected dmRecipientRefNumber $dmRecipientRefNumber = null;

    protected dmSenderRefNumber $dmSenderRefNumber = null;

    protected dmRecipientIdent $dmRecipientIdent = null;

    protected dmSenderIdent $dmSenderIdent = null;

    protected DateTime $dmDeliveryTime = null;

    protected DateTime $dmAcceptanceTime = null;

    protected anonymous48 $dmType = null;

    /**
     * @param dmOrdinal $dmOrdinal
     * @param tIdDm $dmID
     * @param tIdDb $dbIDSender
     * @param dmSender $dmSender
     * @param dmSenderAddress $dmSenderAddress
     * @param int $dmSenderType
     * @param dmRecipient $dmRecipient
     * @param dmRecipientAddress $dmRecipientAddress
     * @param boolean $dmAmbiguousRecipient
     * @param string $dmSenderOrgUnit
     * @param int $dmSenderOrgUnitNum
     * @param tIdDb $dbIDRecipient
     * @param string $dmRecipientOrgUnit
     * @param int $dmRecipientOrgUnitNum
     * @param string $dmToHands
     * @param dmAnnotation $dmAnnotation
     * @param dmRecipientRefNumber $dmRecipientRefNumber
     * @param dmSenderRefNumber $dmSenderRefNumber
     * @param dmRecipientIdent $dmRecipientIdent
     * @param dmSenderIdent $dmSenderIdent
     * @param int $dmLegalTitleLaw
     * @param int $dmLegalTitleYear
     * @param string $dmLegalTitleSect
     * @param string $dmLegalTitlePar
     * @param string $dmLegalTitlePoint
     * @param boolean $dmPersonalDelivery
     * @param boolean $dmAllowSubstDelivery
     * @param int $dmMessageStatus
     * @param int $dmAttachmentSize
     * @param anonymous48 $dmType
     */
    public function __construct($dmOrdinal = null, $dmID = null, $dbIDSender = null, $dmSender = null, $dmSenderAddress = null, protected $dmSenderType = null, $dmRecipient = null, $dmRecipientAddress = null, protected $dmAmbiguousRecipient = null, protected $dmSenderOrgUnit = null, protected $dmSenderOrgUnitNum = null, $dbIDRecipient = null, protected $dmRecipientOrgUnit = null, protected $dmRecipientOrgUnitNum = null, protected $dmToHands = null, $dmAnnotation = null, $dmRecipientRefNumber = null, $dmSenderRefNumber = null, $dmRecipientIdent = null, $dmSenderIdent = null, protected $dmLegalTitleLaw = null, protected $dmLegalTitleYear = null, protected $dmLegalTitleSect = null, protected $dmLegalTitlePar = null, protected $dmLegalTitlePoint = null, protected $dmPersonalDelivery = null, protected $dmAllowSubstDelivery = null, protected $dmMessageStatus = null, protected $dmAttachmentSize = null, DateTime $dmDeliveryTime = null, DateTime $dmAcceptanceTime = null, $dmType = null)
    {
        $this->dmOrdinal = $dmOrdinal;
        $this->dmID = $dmID;
        $this->dbIDSender = $dbIDSender;
        $this->dmSender = $dmSender;
        $this->dmSenderAddress = $dmSenderAddress;
        $this->dmRecipient = $dmRecipient;
        $this->dmRecipientAddress = $dmRecipientAddress;
        $this->dbIDRecipient = $dbIDRecipient;
        $this->dmAnnotation = $dmAnnotation;
        $this->dmRecipientRefNumber = $dmRecipientRefNumber;
        $this->dmSenderRefNumber = $dmSenderRefNumber;
        $this->dmRecipientIdent = $dmRecipientIdent;
        $this->dmSenderIdent = $dmSenderIdent;
        $this->dmDeliveryTime = $dmDeliveryTime !== null ? $dmDeliveryTime->format(DateTime::ATOM) : null;
        $this->dmAcceptanceTime = $dmAcceptanceTime !== null ? $dmAcceptanceTime->format(DateTime::ATOM) : null;
        $this->dmType = $dmType;
    }


    /**
     * @return dmOrdinal
     */
    public function getDmOrdinal()
    {
        return $this->dmOrdinal;
    }


    /**
     * @param dmOrdinal $dmOrdinal
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmOrdinal($dmOrdinal)
    {
        $this->dmOrdinal = $dmOrdinal;
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
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmID($dmID)
    {
        $this->dmID = $dmID;
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
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDbIDSender($dbIDSender)
    {
        $this->dbIDSender = $dbIDSender;
        return $this;
    }


    /**
     * @return dmSender
     */
    public function getDmSender()
    {
        return $this->dmSender;
    }


    /**
     * @param dmSender $dmSender
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmSender($dmSender)
    {
        $this->dmSender = $dmSender;
        return $this;
    }


    /**
     * @return dmSenderAddress
     */
    public function getDmSenderAddress()
    {
        return $this->dmSenderAddress;
    }


    /**
     * @param dmSenderAddress $dmSenderAddress
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmSenderAddress($dmSenderAddress)
    {
        $this->dmSenderAddress = $dmSenderAddress;
        return $this;
    }


    /**
     * @return int
     */
    public function getDmSenderType()
    {
        return $this->dmSenderType;
    }


    /**
     * @param int $dmSenderType
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmSenderType($dmSenderType)
    {
        $this->dmSenderType = $dmSenderType;
        return $this;
    }


    /**
     * @return dmRecipient
     */
    public function getDmRecipient()
    {
        return $this->dmRecipient;
    }


    /**
     * @param dmRecipient $dmRecipient
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmRecipient($dmRecipient)
    {
        $this->dmRecipient = $dmRecipient;
        return $this;
    }


    /**
     * @return dmRecipientAddress
     */
    public function getDmRecipientAddress()
    {
        return $this->dmRecipientAddress;
    }


    /**
     * @param dmRecipientAddress $dmRecipientAddress
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmRecipientAddress($dmRecipientAddress)
    {
        $this->dmRecipientAddress = $dmRecipientAddress;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDmAmbiguousRecipient()
    {
        return $this->dmAmbiguousRecipient;
    }


    /**
     * @param boolean $dmAmbiguousRecipient
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmAmbiguousRecipient($dmAmbiguousRecipient)
    {
        $this->dmAmbiguousRecipient = $dmAmbiguousRecipient;
        return $this;
    }


    /**
     * @return string
     */
    public function getDmSenderOrgUnit()
    {
        return $this->dmSenderOrgUnit;
    }


    /**
     * @param string $dmSenderOrgUnit
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmSenderOrgUnit($dmSenderOrgUnit)
    {
        $this->dmSenderOrgUnit = $dmSenderOrgUnit;
        return $this;
    }


    /**
     * @return int
     */
    public function getDmSenderOrgUnitNum()
    {
        return $this->dmSenderOrgUnitNum;
    }


    /**
     * @param int $dmSenderOrgUnitNum
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmSenderOrgUnitNum($dmSenderOrgUnitNum)
    {
        $this->dmSenderOrgUnitNum = $dmSenderOrgUnitNum;
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
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDbIDRecipient($dbIDRecipient)
    {
        $this->dbIDRecipient = $dbIDRecipient;
        return $this;
    }


    /**
     * @return string
     */
    public function getDmRecipientOrgUnit()
    {
        return $this->dmRecipientOrgUnit;
    }


    /**
     * @param string $dmRecipientOrgUnit
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmRecipientOrgUnit($dmRecipientOrgUnit)
    {
        $this->dmRecipientOrgUnit = $dmRecipientOrgUnit;
        return $this;
    }


    /**
     * @return int
     */
    public function getDmRecipientOrgUnitNum()
    {
        return $this->dmRecipientOrgUnitNum;
    }


    /**
     * @param int $dmRecipientOrgUnitNum
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmRecipientOrgUnitNum($dmRecipientOrgUnitNum)
    {
        $this->dmRecipientOrgUnitNum = $dmRecipientOrgUnitNum;
        return $this;
    }


    /**
     * @return string
     */
    public function getDmToHands()
    {
        return $this->dmToHands;
    }


    /**
     * @param string $dmToHands
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmToHands($dmToHands)
    {
        $this->dmToHands = $dmToHands;
        return $this;
    }


    /**
     * @return dmAnnotation
     */
    public function getDmAnnotation()
    {
        return $this->dmAnnotation;
    }


    /**
     * @param dmAnnotation $dmAnnotation
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmAnnotation($dmAnnotation)
    {
        $this->dmAnnotation = $dmAnnotation;
        return $this;
    }


    /**
     * @return dmRecipientRefNumber
     */
    public function getDmRecipientRefNumber()
    {
        return $this->dmRecipientRefNumber;
    }


    /**
     * @param dmRecipientRefNumber $dmRecipientRefNumber
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmRecipientRefNumber($dmRecipientRefNumber)
    {
        $this->dmRecipientRefNumber = $dmRecipientRefNumber;
        return $this;
    }


    /**
     * @return dmSenderRefNumber
     */
    public function getDmSenderRefNumber()
    {
        return $this->dmSenderRefNumber;
    }


    /**
     * @param dmSenderRefNumber $dmSenderRefNumber
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmSenderRefNumber($dmSenderRefNumber)
    {
        $this->dmSenderRefNumber = $dmSenderRefNumber;
        return $this;
    }


    /**
     * @return dmRecipientIdent
     */
    public function getDmRecipientIdent()
    {
        return $this->dmRecipientIdent;
    }


    /**
     * @param dmRecipientIdent $dmRecipientIdent
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmRecipientIdent($dmRecipientIdent)
    {
        $this->dmRecipientIdent = $dmRecipientIdent;
        return $this;
    }


    /**
     * @return dmSenderIdent
     */
    public function getDmSenderIdent()
    {
        return $this->dmSenderIdent;
    }


    /**
     * @param dmSenderIdent $dmSenderIdent
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmSenderIdent($dmSenderIdent)
    {
        $this->dmSenderIdent = $dmSenderIdent;
        return $this;
    }


    /**
     * @return int
     */
    public function getDmLegalTitleLaw()
    {
        return $this->dmLegalTitleLaw;
    }


    /**
     * @param int $dmLegalTitleLaw
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmLegalTitleLaw($dmLegalTitleLaw)
    {
        $this->dmLegalTitleLaw = $dmLegalTitleLaw;
        return $this;
    }


    /**
     * @return int
     */
    public function getDmLegalTitleYear()
    {
        return $this->dmLegalTitleYear;
    }


    /**
     * @param int $dmLegalTitleYear
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmLegalTitleYear($dmLegalTitleYear)
    {
        $this->dmLegalTitleYear = $dmLegalTitleYear;
        return $this;
    }


    /**
     * @return string
     */
    public function getDmLegalTitleSect()
    {
        return $this->dmLegalTitleSect;
    }


    /**
     * @param string $dmLegalTitleSect
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmLegalTitleSect($dmLegalTitleSect)
    {
        $this->dmLegalTitleSect = $dmLegalTitleSect;
        return $this;
    }


    /**
     * @return string
     */
    public function getDmLegalTitlePar()
    {
        return $this->dmLegalTitlePar;
    }


    /**
     * @param string $dmLegalTitlePar
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmLegalTitlePar($dmLegalTitlePar)
    {
        $this->dmLegalTitlePar = $dmLegalTitlePar;
        return $this;
    }


    /**
     * @return string
     */
    public function getDmLegalTitlePoint()
    {
        return $this->dmLegalTitlePoint;
    }


    /**
     * @param string $dmLegalTitlePoint
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmLegalTitlePoint($dmLegalTitlePoint)
    {
        $this->dmLegalTitlePoint = $dmLegalTitlePoint;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDmPersonalDelivery()
    {
        return $this->dmPersonalDelivery;
    }


    /**
     * @param boolean $dmPersonalDelivery
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmPersonalDelivery($dmPersonalDelivery)
    {
        $this->dmPersonalDelivery = $dmPersonalDelivery;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDmAllowSubstDelivery()
    {
        return $this->dmAllowSubstDelivery;
    }


    /**
     * @param boolean $dmAllowSubstDelivery
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmAllowSubstDelivery($dmAllowSubstDelivery)
    {
        $this->dmAllowSubstDelivery = $dmAllowSubstDelivery;
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
     * @return \Defr\CzechDataBox\Api\tRecord
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
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmAttachmentSize($dmAttachmentSize)
    {
        $this->dmAttachmentSize = $dmAttachmentSize;
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
     * @return \Defr\CzechDataBox\Api\tRecord
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
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmAcceptanceTime(DateTime $dmAcceptanceTime)
    {
        $this->dmAcceptanceTime = $dmAcceptanceTime->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return anonymous48
     */
    public function getDmType()
    {
        return $this->dmType;
    }


    /**
     * @param anonymous48 $dmType
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmType($dmType)
    {
        $this->dmType = $dmType;
        return $this;
    }

}
