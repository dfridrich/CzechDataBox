<?php

namespace Defr\CzechDataBox\Api;

class tRecord
{

    /**
     * @var dmOrdinal $dmOrdinal
     */
    protected $dmOrdinal = null;

    /**
     * @var tIdDm $dmID
     */
    protected $dmID = null;

    /**
     * @var tIdDb $dbIDSender
     */
    protected $dbIDSender = null;

    /**
     * @var dmSender $dmSender
     */
    protected $dmSender = null;

    /**
     * @var dmSenderAddress $dmSenderAddress
     */
    protected $dmSenderAddress = null;

    /**
     * @var int $dmSenderType
     */
    protected $dmSenderType = null;

    /**
     * @var dmRecipient $dmRecipient
     */
    protected $dmRecipient = null;

    /**
     * @var dmRecipientAddress $dmRecipientAddress
     */
    protected $dmRecipientAddress = null;

    /**
     * @var boolean $dmAmbiguousRecipient
     */
    protected $dmAmbiguousRecipient = null;

    /**
     * @var string $dmSenderOrgUnit
     */
    protected $dmSenderOrgUnit = null;

    /**
     * @var int $dmSenderOrgUnitNum
     */
    protected $dmSenderOrgUnitNum = null;

    /**
     * @var tIdDb $dbIDRecipient
     */
    protected $dbIDRecipient = null;

    /**
     * @var string $dmRecipientOrgUnit
     */
    protected $dmRecipientOrgUnit = null;

    /**
     * @var int $dmRecipientOrgUnitNum
     */
    protected $dmRecipientOrgUnitNum = null;

    /**
     * @var string $dmToHands
     */
    protected $dmToHands = null;

    /**
     * @var dmAnnotation $dmAnnotation
     */
    protected $dmAnnotation = null;

    /**
     * @var dmRecipientRefNumber $dmRecipientRefNumber
     */
    protected $dmRecipientRefNumber = null;

    /**
     * @var dmSenderRefNumber $dmSenderRefNumber
     */
    protected $dmSenderRefNumber = null;

    /**
     * @var dmRecipientIdent $dmRecipientIdent
     */
    protected $dmRecipientIdent = null;

    /**
     * @var dmSenderIdent $dmSenderIdent
     */
    protected $dmSenderIdent = null;

    /**
     * @var int $dmLegalTitleLaw
     */
    protected $dmLegalTitleLaw = null;

    /**
     * @var int $dmLegalTitleYear
     */
    protected $dmLegalTitleYear = null;

    /**
     * @var string $dmLegalTitleSect
     */
    protected $dmLegalTitleSect = null;

    /**
     * @var string $dmLegalTitlePar
     */
    protected $dmLegalTitlePar = null;

    /**
     * @var string $dmLegalTitlePoint
     */
    protected $dmLegalTitlePoint = null;

    /**
     * @var boolean $dmPersonalDelivery
     */
    protected $dmPersonalDelivery = null;

    /**
     * @var boolean $dmAllowSubstDelivery
     */
    protected $dmAllowSubstDelivery = null;

    /**
     * @var int $dmMessageStatus
     */
    protected $dmMessageStatus = null;

    /**
     * @var int $dmAttachmentSize
     */
    protected $dmAttachmentSize = null;

    /**
     * @var \DateTime $dmDeliveryTime
     */
    protected $dmDeliveryTime = null;

    /**
     * @var \DateTime $dmAcceptanceTime
     */
    protected $dmAcceptanceTime = null;

    /**
     * @var anonymous50 $dmType
     */
    protected $dmType = null;

    /**
     * @var boolean $dmVODZ
     */
    protected $dmVODZ = null;

    /**
     * @var int $specMessFlag
     */
    protected $specMessFlag = null;

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
     * @param \DateTime $dmDeliveryTime
     * @param \DateTime $dmAcceptanceTime
     * @param anonymous50 $dmType
     * @param boolean $dmVODZ
     * @param int $specMessFlag
     */
    public function __construct($dmOrdinal = null, $dmID = null, $dbIDSender = null, $dmSender = null, $dmSenderAddress = null, $dmSenderType = null, $dmRecipient = null, $dmRecipientAddress = null, $dmAmbiguousRecipient = null, $dmSenderOrgUnit = null, $dmSenderOrgUnitNum = null, $dbIDRecipient = null, $dmRecipientOrgUnit = null, $dmRecipientOrgUnitNum = null, $dmToHands = null, $dmAnnotation = null, $dmRecipientRefNumber = null, $dmSenderRefNumber = null, $dmRecipientIdent = null, $dmSenderIdent = null, $dmLegalTitleLaw = null, $dmLegalTitleYear = null, $dmLegalTitleSect = null, $dmLegalTitlePar = null, $dmLegalTitlePoint = null, $dmPersonalDelivery = null, $dmAllowSubstDelivery = null, $dmMessageStatus = null, $dmAttachmentSize = null, \DateTime $dmDeliveryTime = null, \DateTime $dmAcceptanceTime = null, $dmType = null, $dmVODZ = null, $specMessFlag = null)
    {
        $this->dmOrdinal = $dmOrdinal;
        $this->dmID = $dmID;
        $this->dbIDSender = $dbIDSender;
        $this->dmSender = $dmSender;
        $this->dmSenderAddress = $dmSenderAddress;
        $this->dmSenderType = $dmSenderType;
        $this->dmRecipient = $dmRecipient;
        $this->dmRecipientAddress = $dmRecipientAddress;
        $this->dmAmbiguousRecipient = $dmAmbiguousRecipient;
        $this->dmSenderOrgUnit = $dmSenderOrgUnit;
        $this->dmSenderOrgUnitNum = $dmSenderOrgUnitNum;
        $this->dbIDRecipient = $dbIDRecipient;
        $this->dmRecipientOrgUnit = $dmRecipientOrgUnit;
        $this->dmRecipientOrgUnitNum = $dmRecipientOrgUnitNum;
        $this->dmToHands = $dmToHands;
        $this->dmAnnotation = $dmAnnotation;
        $this->dmRecipientRefNumber = $dmRecipientRefNumber;
        $this->dmSenderRefNumber = $dmSenderRefNumber;
        $this->dmRecipientIdent = $dmRecipientIdent;
        $this->dmSenderIdent = $dmSenderIdent;
        $this->dmLegalTitleLaw = $dmLegalTitleLaw;
        $this->dmLegalTitleYear = $dmLegalTitleYear;
        $this->dmLegalTitleSect = $dmLegalTitleSect;
        $this->dmLegalTitlePar = $dmLegalTitlePar;
        $this->dmLegalTitlePoint = $dmLegalTitlePoint;
        $this->dmPersonalDelivery = $dmPersonalDelivery;
        $this->dmAllowSubstDelivery = $dmAllowSubstDelivery;
        $this->dmMessageStatus = $dmMessageStatus;
        $this->dmAttachmentSize = $dmAttachmentSize;
        $this->dmDeliveryTime = $dmDeliveryTime ? $dmDeliveryTime->format(\DateTime::ATOM) : null;
        $this->dmAcceptanceTime = $dmAcceptanceTime ? $dmAcceptanceTime->format(\DateTime::ATOM) : null;
        $this->dmType = $dmType;
        $this->dmVODZ = $dmVODZ;
        $this->specMessFlag = $specMessFlag;
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
                return new \DateTime($this->dmDeliveryTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dmDeliveryTime
     * @return \Defr\CzechDataBox\Api\tRecord
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
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmAcceptanceTime(\DateTime $dmAcceptanceTime)
    {
        $this->dmAcceptanceTime = $dmAcceptanceTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return anonymous50
     */
    public function getDmType()
    {
        return $this->dmType;
    }

    /**
     * @param anonymous50 $dmType
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmType($dmType)
    {
        $this->dmType = $dmType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDmVODZ()
    {
        return $this->dmVODZ;
    }

    /**
     * @param boolean $dmVODZ
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setDmVODZ($dmVODZ)
    {
        $this->dmVODZ = $dmVODZ;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpecMessFlag()
    {
        return $this->specMessFlag;
    }

    /**
     * @param int $specMessFlag
     * @return \Defr\CzechDataBox\Api\tRecord
     */
    public function setSpecMessFlag($specMessFlag)
    {
        $this->specMessFlag = $specMessFlag;
        return $this;
    }
}
