<?php

namespace Defr\CzechDataBox\Api;

class tRecipients
{

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
     * @param tIdDb $dbIDRecipient
     * @param string $dmRecipientOrgUnit
     * @param int $dmRecipientOrgUnitNum
     * @param string $dmToHands
     */
    public function __construct($dbIDRecipient = null, $dmRecipientOrgUnit = null, $dmRecipientOrgUnitNum = null, $dmToHands = null)
    {
      $this->dbIDRecipient = $dbIDRecipient;
      $this->dmRecipientOrgUnit = $dmRecipientOrgUnit;
      $this->dmRecipientOrgUnitNum = $dmRecipientOrgUnitNum;
      $this->dmToHands = $dmToHands;
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
     * @return \Defr\CzechDataBox\Api\tRecipients
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
     * @return \Defr\CzechDataBox\Api\tRecipients
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
     * @return \Defr\CzechDataBox\Api\tRecipients
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
     * @return \Defr\CzechDataBox\Api\tRecipients
     */
    public function setDmToHands($dmToHands)
    {
      $this->dmToHands = $dmToHands;
      return $this;
    }

}
