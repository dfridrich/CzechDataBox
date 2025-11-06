<?php

namespace Defr\CzechDataBox\Api;

class tMultipleMessageEnvelopeSub
{

    /**
     * @var string $dmSenderOrgUnit
     */
    protected $dmSenderOrgUnit = null;

    /**
     * @var int $dmSenderOrgUnitNum
     */
    protected $dmSenderOrgUnitNum = null;

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
     * @var boolean $dmOVM
     */
    protected $dmOVM = null;

    /**
     * @var dmPublishOwnID $dmPublishOwnID
     */
    protected $dmPublishOwnID = null;

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
     * @param dmPublishOwnID $dmPublishOwnID
     */
    public function __construct($dmSenderOrgUnit = null, $dmSenderOrgUnitNum = null, $dmAnnotation = null, $dmRecipientRefNumber = null, $dmSenderRefNumber = null, $dmRecipientIdent = null, $dmSenderIdent = null, $dmLegalTitleLaw = null, $dmLegalTitleYear = null, $dmLegalTitleSect = null, $dmLegalTitlePar = null, $dmLegalTitlePoint = null, $dmPersonalDelivery = null, $dmAllowSubstDelivery = null, $dmOVM = null, $dmPublishOwnID = null)
    {
      $this->dmSenderOrgUnit = $dmSenderOrgUnit;
      $this->dmSenderOrgUnitNum = $dmSenderOrgUnitNum;
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
      $this->dmOVM = $dmOVM;
      $this->dmPublishOwnID = $dmPublishOwnID;
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
     * @return dmPublishOwnID
     */
    public function getDmPublishOwnID()
    {
      return $this->dmPublishOwnID;
    }

    /**
     * @param dmPublishOwnID $dmPublishOwnID
     * @return \Defr\CzechDataBox\Api\tMultipleMessageEnvelopeSub
     */
    public function setDmPublishOwnID($dmPublishOwnID)
    {
      $this->dmPublishOwnID = $dmPublishOwnID;
      return $this;
    }

}
