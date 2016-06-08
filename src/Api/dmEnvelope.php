<?php

namespace Defr\CzechDataBox\Api;

class dmEnvelope
{
    /**
     * @var string
     */
    protected $dbIDRecipient;

    /**
     * @var string
     */
    protected $dmAnnotation;

    /**
     * @var string
     */
    protected $dmToHands;

    /**
     * @var bool
     */
    protected $dmPersonalDelivery;

    /**
     * @var bool
     */
    protected $dmAllowSubstDelivery;

    /**
     * @var string
     */
    protected $dmLegalTitleLaw;

    /**
     * @var int
     */
    protected $dmLegalTitleYear;

    /**
     * @var int
     */
    protected $dmLegalTitleSect;

    /**
     * @var int
     */
    protected $dmLegalTitlePar;

    /**
     * @var string
     */
    protected $dmLegalTitlePoint;

    /**
     * @var bool
     */
    protected $dmPublishOwnID;

    protected $dmType;

    /**
     * dmEnvelope constructor.
     *
     * @param null $dbIDRecipient
     * @param null $dmAnnotation
     * @param null $dmToHands
     * @param null $dmPersonalDelivery
     * @param null $dmAllowSubstDelivery
     * @param null $dmLegalTitleLaw
     * @param null $dmLegalTitleYear
     * @param null $dmLegalTitleSect
     * @param null $dmLegalTitlePar
     * @param null $dmLegalTitlePoint
     * @param null $dmPublishOwnID
     * @param null $dmType
     */
    public function __construct(
      $dbIDRecipient = null,
      $dmAnnotation = null,
      $dmToHands = null,
      $dmPersonalDelivery = null,
      $dmAllowSubstDelivery = null,
      $dmLegalTitleLaw = null,
      $dmLegalTitleYear = null,
      $dmLegalTitleSect = null,
      $dmLegalTitlePar = null,
      $dmLegalTitlePoint = null,
      $dmPublishOwnID = null,
      $dmType = null )
    {
        $this->dbIDRecipient = $dbIDRecipient;
        $this->dmAnnotation = $dmAnnotation;
        $this->dmToHands = $dmToHands;
        $this->dmPersonalDelivery = $dmPersonalDelivery;
        $this->dmAllowSubstDelivery = $dmAllowSubstDelivery;
        $this->dmLegalTitleLaw = $dmLegalTitleLaw;
        $this->dmLegalTitleYear = $dmLegalTitleYear;
        $this->dmLegalTitleSect = $dmLegalTitleSect;
        $this->dmLegalTitlePar = $dmLegalTitlePar;
        $this->dmLegalTitlePoint = $dmLegalTitlePoint;
        $this->dmPublishOwnID = $dmPublishOwnID;
        $this->dmType = $dmType;
    }

    /**
     * @return string
     */
    public function getDbIDRecipient()
    {
        return $this->dbIDRecipient;
    }

    /**
     * @param string $dbIDRecipient
     */
    public function setDbIDRecipient($dbIDRecipient)
    {
        $this->dbIDRecipient = $dbIDRecipient;
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
     */
    public function setDmAnnotation($dmAnnotation)
    {
        $this->dmAnnotation = $dmAnnotation;
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
     */
    public function setDmToHands($dmToHands)
    {
        $this->dmToHands = $dmToHands;
    }

    /**
     * @return boolean
     */
    public function isDmPersonalDelivery()
    {
        return $this->dmPersonalDelivery;
    }

    /**
     * @param boolean $dmPersonalDelivery
     */
    public function setDmPersonalDelivery($dmPersonalDelivery)
    {
        $this->dmPersonalDelivery = $dmPersonalDelivery;
    }

    /**
     * @return boolean
     */
    public function isDmAllowSubstDelivery()
    {
        return $this->dmAllowSubstDelivery;
    }

    /**
     * @param boolean $dmAllowSubstDelivery
     */
    public function setDmAllowSubstDelivery($dmAllowSubstDelivery)
    {
        $this->dmAllowSubstDelivery = $dmAllowSubstDelivery;
    }

    /**
     * @return string
     */
    public function getDmLegalTitleLaw()
    {
        return $this->dmLegalTitleLaw;
    }

    /**
     * @param string $dmLegalTitleLaw
     */
    public function setDmLegalTitleLaw($dmLegalTitleLaw)
    {
        $this->dmLegalTitleLaw = $dmLegalTitleLaw;
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
     */
    public function setDmLegalTitleYear($dmLegalTitleYear)
    {
        $this->dmLegalTitleYear = $dmLegalTitleYear;
    }

    /**
     * @return int
     */
    public function getDmLegalTitleSect()
    {
        return $this->dmLegalTitleSect;
    }

    /**
     * @param int $dmLegalTitleSect
     */
    public function setDmLegalTitleSect($dmLegalTitleSect)
    {
        $this->dmLegalTitleSect = $dmLegalTitleSect;
    }

    /**
     * @return int
     */
    public function getDmLegalTitlePar()
    {
        return $this->dmLegalTitlePar;
    }

    /**
     * @param int $dmLegalTitlePar
     */
    public function setDmLegalTitlePar($dmLegalTitlePar)
    {
        $this->dmLegalTitlePar = $dmLegalTitlePar;
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
     */
    public function setDmLegalTitlePoint($dmLegalTitlePoint)
    {
        $this->dmLegalTitlePoint = $dmLegalTitlePoint;
    }

    /**
     * @return boolean
     */
    public function isDmPublishOwnID()
    {
        return $this->dmPublishOwnID;
    }

    /**
     * @param boolean $dmPublishOwnID
     */
    public function setDmPublishOwnID($dmPublishOwnID)
    {
        $this->dmPublishOwnID = $dmPublishOwnID;
    }

    /**
     * @return mixed
     */
    public function getDmType()
    {
        return $this->dmType;
    }

    /**
     * @param mixed $dmType
     */
    public function setDmType($dmType)
    {
        $this->dmType = $dmType;
    }
}
