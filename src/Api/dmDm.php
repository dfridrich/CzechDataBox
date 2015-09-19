<?php

namespace Defr\CzechDataBox\Api;

class dmDm
{
    /**
     * @var tIdDm
     */
    protected $dmID = null;

    /**
     * @var tIdDb
     */
    protected $dbIDSender = null;

    /**
     * @var dmSender
     */
    protected $dmSender = null;

    /**
     * @var dmSenderAddress
     */
    protected $dmSenderAddress = null;

    /**
     * @var int
     */
    protected $dmSenderType = null;

    /**
     * @var dmRecipient
     */
    protected $dmRecipient = null;

    /**
     * @var dmRecipientAddress
     */
    protected $dmRecipientAddress = null;

    /**
     * @var bool
     */
    protected $dmAmbiguousRecipient = null;

    /**
     * @var string
     */
    protected $dmSenderOrgUnit = null;

    /**
     * @var int
     */
    protected $dmSenderOrgUnitNum = null;

    /**
     * @var tIdDb
     */
    protected $dbIDRecipient = null;

    /**
     * @var string
     */
    protected $dmRecipientOrgUnit = null;

    /**
     * @var int
     */
    protected $dmRecipientOrgUnitNum = null;

    /**
     * @var string
     */
    protected $dmToHands = null;

    /**
     * @var dmAnnotation
     */
    protected $dmAnnotation = null;

    /**
     * @var dmRecipientRefNumber
     */
    protected $dmRecipientRefNumber = null;

    /**
     * @var dmSenderRefNumber
     */
    protected $dmSenderRefNumber = null;

    /**
     * @var dmRecipientIdent
     */
    protected $dmRecipientIdent = null;

    /**
     * @var dmSenderIdent
     */
    protected $dmSenderIdent = null;

    /**
     * @var int
     */
    protected $dmLegalTitleLaw = null;

    /**
     * @var int
     */
    protected $dmLegalTitleYear = null;

    /**
     * @var string
     */
    protected $dmLegalTitleSect = null;

    /**
     * @var string
     */
    protected $dmLegalTitlePar = null;

    /**
     * @var string
     */
    protected $dmLegalTitlePoint = null;

    /**
     * @var bool
     */
    protected $dmPersonalDelivery = null;

    /**
     * @var bool
     */
    protected $dmAllowSubstDelivery = null;

    /**
     * @param tIdDm                $dmID
     * @param tIdDb                $dbIDSender
     * @param dmSender             $dmSender
     * @param dmSenderAddress      $dmSenderAddress
     * @param int                  $dmSenderType
     * @param dmRecipient          $dmRecipient
     * @param dmRecipientAddress   $dmRecipientAddress
     * @param bool                 $dmAmbiguousRecipient
     * @param string               $dmSenderOrgUnit
     * @param int                  $dmSenderOrgUnitNum
     * @param tIdDb                $dbIDRecipient
     * @param string               $dmRecipientOrgUnit
     * @param int                  $dmRecipientOrgUnitNum
     * @param string               $dmToHands
     * @param dmAnnotation         $dmAnnotation
     * @param dmRecipientRefNumber $dmRecipientRefNumber
     * @param dmSenderRefNumber    $dmSenderRefNumber
     * @param dmRecipientIdent     $dmRecipientIdent
     * @param dmSenderIdent        $dmSenderIdent
     * @param int                  $dmLegalTitleLaw
     * @param int                  $dmLegalTitleYear
     * @param string               $dmLegalTitleSect
     * @param string               $dmLegalTitlePar
     * @param string               $dmLegalTitlePoint
     * @param bool                 $dmPersonalDelivery
     * @param bool                 $dmAllowSubstDelivery
     */
    public function __construct($dmID = null, $dbIDSender = null, $dmSender = null, $dmSenderAddress = null, $dmSenderType = null, $dmRecipient = null, $dmRecipientAddress = null, $dmAmbiguousRecipient = null, $dmSenderOrgUnit = null, $dmSenderOrgUnitNum = null, $dbIDRecipient = null, $dmRecipientOrgUnit = null, $dmRecipientOrgUnitNum = null, $dmToHands = null, $dmAnnotation = null, $dmRecipientRefNumber = null, $dmSenderRefNumber = null, $dmRecipientIdent = null, $dmSenderIdent = null, $dmLegalTitleLaw = null, $dmLegalTitleYear = null, $dmLegalTitleSect = null, $dmLegalTitlePar = null, $dmLegalTitlePoint = null, $dmPersonalDelivery = null, $dmAllowSubstDelivery = null)
    {
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
     */
    public function setDmRecipientAddress($dmRecipientAddress)
    {
        $this->dmRecipientAddress = $dmRecipientAddress;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDmAmbiguousRecipient()
    {
        return $this->dmAmbiguousRecipient;
    }

    /**
     * @param bool $dmAmbiguousRecipient
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
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
     *
     * @return \Defr\CzechDataBox\Api\dmDm
     */
    public function setDmLegalTitlePoint($dmLegalTitlePoint)
    {
        $this->dmLegalTitlePoint = $dmLegalTitlePoint;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDmPersonalDelivery()
    {
        return $this->dmPersonalDelivery;
    }

    /**
     * @param bool $dmPersonalDelivery
     *
     * @return \Defr\CzechDataBox\Api\dmDm
     */
    public function setDmPersonalDelivery($dmPersonalDelivery)
    {
        $this->dmPersonalDelivery = $dmPersonalDelivery;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDmAllowSubstDelivery()
    {
        return $this->dmAllowSubstDelivery;
    }

    /**
     * @param bool $dmAllowSubstDelivery
     *
     * @return \Defr\CzechDataBox\Api\dmDm
     */
    public function setDmAllowSubstDelivery($dmAllowSubstDelivery)
    {
        $this->dmAllowSubstDelivery = $dmAllowSubstDelivery;

        return $this;
    }
}
