<?php

namespace Defr\CzechDataBox\Api;

class tListOfFReceivedInput
{

    /**
     * @var \DateTime $dmFromTime
     */
    protected $dmFromTime = null;

    /**
     * @var \DateTime $dmToTime
     */
    protected $dmToTime = null;

    /**
     * @var int $dmRecipientOrgUnitNum
     */
    protected $dmRecipientOrgUnitNum = null;

    /**
     * @var string $dmStatusFilter
     */
    protected $dmStatusFilter = null;

    /**
     * @var int $dmOffset
     */
    protected $dmOffset = null;

    /**
     * @var int $dmLimit
     */
    protected $dmLimit = null;

    /**
     * @param \DateTime $dmFromTime
     * @param \DateTime $dmToTime
     * @param int $dmRecipientOrgUnitNum
     * @param string $dmStatusFilter
     * @param int $dmOffset
     * @param int $dmLimit
     */
    public function __construct(\DateTime $dmFromTime = null, \DateTime $dmToTime = null, $dmRecipientOrgUnitNum = null, $dmStatusFilter = null, $dmOffset = null, $dmLimit = null)
    {
        $this->dmFromTime = $dmFromTime ? $dmFromTime->format(\DateTime::ATOM) : null;
        $this->dmToTime = $dmToTime ? $dmToTime->format(\DateTime::ATOM) : null;
        $this->dmRecipientOrgUnitNum = $dmRecipientOrgUnitNum;
        $this->dmStatusFilter = $dmStatusFilter;
        $this->dmOffset = $dmOffset;
        $this->dmLimit = $dmLimit;
    }

    /**
     * @return \DateTime
     */
    public function getDmFromTime()
    {
        if ($this->dmFromTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dmFromTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dmFromTime
     * @return \Defr\CzechDataBox\Api\tListOfFReceivedInput
     */
    public function setDmFromTime(\DateTime $dmFromTime)
    {
        $this->dmFromTime = $dmFromTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDmToTime()
    {
        if ($this->dmToTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dmToTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dmToTime
     * @return \Defr\CzechDataBox\Api\tListOfFReceivedInput
     */
    public function setDmToTime(\DateTime $dmToTime)
    {
        $this->dmToTime = $dmToTime->format(\DateTime::ATOM);
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
     * @return \Defr\CzechDataBox\Api\tListOfFReceivedInput
     */
    public function setDmRecipientOrgUnitNum($dmRecipientOrgUnitNum)
    {
        $this->dmRecipientOrgUnitNum = $dmRecipientOrgUnitNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmStatusFilter()
    {
        return $this->dmStatusFilter;
    }

    /**
     * @param string $dmStatusFilter
     * @return \Defr\CzechDataBox\Api\tListOfFReceivedInput
     */
    public function setDmStatusFilter($dmStatusFilter)
    {
        $this->dmStatusFilter = $dmStatusFilter;
        return $this;
    }

    /**
     * @return int
     */
    public function getDmOffset()
    {
        return $this->dmOffset;
    }

    /**
     * @param int $dmOffset
     * @return \Defr\CzechDataBox\Api\tListOfFReceivedInput
     */
    public function setDmOffset($dmOffset)
    {
        $this->dmOffset = $dmOffset;
        return $this;
    }

    /**
     * @return int
     */
    public function getDmLimit()
    {
        return $this->dmLimit;
    }

    /**
     * @param int $dmLimit
     * @return \Defr\CzechDataBox\Api\tListOfFReceivedInput
     */
    public function setDmLimit($dmLimit)
    {
        $this->dmLimit = $dmLimit;
        return $this;
    }
}
