<?php

namespace Defr\CzechDataBox\Api;

class tMessageEnvelopeSub
{

    protected tIdDb $dbIDRecipient = null;

    protected dmAnnotation $dmAnnotation = null;

    protected dmRecipientRefNumber $dmRecipientRefNumber = null;

    protected dmSenderRefNumber $dmSenderRefNumber = null;

    protected dmRecipientIdent $dmRecipientIdent = null;

    protected dmSenderIdent $dmSenderIdent = null;

    protected tDmType $dmType = null;

    /**
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
     * @param boolean $dmOVM
     * @param boolean $dmPublishOwnID
     * @param tDmType $dmType
     */
    public function __construct(protected $dmSenderOrgUnit = null, protected $dmSenderOrgUnitNum = null, $dbIDRecipient = null, protected $dmRecipientOrgUnit = null, protected $dmRecipientOrgUnitNum = null, protected $dmToHands = null, $dmAnnotation = null, $dmRecipientRefNumber = null, $dmSenderRefNumber = null, $dmRecipientIdent = null, $dmSenderIdent = null, protected $dmLegalTitleLaw = null, protected $dmLegalTitleYear = null, protected $dmLegalTitleSect = null, protected $dmLegalTitlePar = null, protected $dmLegalTitlePoint = null, protected $dmPersonalDelivery = null, protected $dmAllowSubstDelivery = null, protected $dmOVM = null, protected $dmPublishOwnID = null, $dmType = null)
    {
        $this->dbIDRecipient = $dbIDRecipient;
        $this->dmAnnotation = $dmAnnotation;
        $this->dmRecipientRefNumber = $dmRecipientRefNumber;
        $this->dmSenderRefNumber = $dmSenderRefNumber;
        $this->dmRecipientIdent = $dmRecipientIdent;
        $this->dmSenderIdent = $dmSenderIdent;
        $this->dmType = $dmType;
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
     */
    public function setDmAllowSubstDelivery($dmAllowSubstDelivery)
    {
        $this->dmAllowSubstDelivery = $dmAllowSubstDelivery;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDmOVM()
    {
        return $this->dmOVM;
    }


    /**
     * @param boolean $dmOVM
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
     */
    public function setDmOVM($dmOVM)
    {
        $this->dmOVM = $dmOVM;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDmPublishOwnID()
    {
        return $this->dmPublishOwnID;
    }


    /**
     * @param boolean $dmPublishOwnID
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
     */
    public function setDmPublishOwnID($dmPublishOwnID)
    {
        $this->dmPublishOwnID = $dmPublishOwnID;
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
     * @return \Defr\CzechDataBox\Api\tMessageEnvelopeSub
     */
    public function setDmType($dmType)
    {
        $this->dmType = $dmType;
        return $this;
    }

}
