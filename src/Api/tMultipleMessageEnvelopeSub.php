<?php

namespace Defr\CzechDataBox\Api;

class tMultipleMessageEnvelopeSub
{

    protected dmAnnotation $dmAnnotation = null;

    protected dmRecipientRefNumber $dmRecipientRefNumber = null;

    protected dmSenderRefNumber $dmSenderRefNumber = null;

    protected dmRecipientIdent $dmRecipientIdent = null;

    protected dmSenderIdent $dmSenderIdent = null;

    /**
     * @param string $dmSenderOrgUnit
     * @param int $dmSenderOrgUnitNum
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
     */
    public function __construct(protected $dmSenderOrgUnit = null, protected $dmSenderOrgUnitNum = null, $dmAnnotation = null, $dmRecipientRefNumber = null, $dmSenderRefNumber = null, $dmRecipientIdent = null, $dmSenderIdent = null, protected $dmLegalTitleLaw = null, protected $dmLegalTitleYear = null, protected $dmLegalTitleSect = null, protected $dmLegalTitlePar = null, protected $dmLegalTitlePoint = null, protected $dmPersonalDelivery = null, protected $dmAllowSubstDelivery = null, protected $dmOVM = null, protected $dmPublishOwnID = null)
    {
        $this->dmAnnotation = $dmAnnotation;
        $this->dmRecipientRefNumber = $dmRecipientRefNumber;
        $this->dmSenderRefNumber = $dmSenderRefNumber;
        $this->dmRecipientIdent = $dmRecipientIdent;
        $this->dmSenderIdent = $dmSenderIdent;
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
     */
    public function setDmSenderOrgUnitNum($dmSenderOrgUnitNum)
    {
        $this->dmSenderOrgUnitNum = $dmSenderOrgUnitNum;
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
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
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
     */
    public function setDmPublishOwnID($dmPublishOwnID)
    {
        $this->dmPublishOwnID = $dmPublishOwnID;
        return $this;
    }

}
