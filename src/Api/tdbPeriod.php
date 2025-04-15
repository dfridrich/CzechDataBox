<?php

namespace Defr\CzechDataBox\Api;

class tdbPeriod
{

    /**
     * @var \DateTime $PeriodFrom
     */
    protected $PeriodFrom = null;

    /**
     * @var \DateTime $PeriodTo
     */
    protected $PeriodTo = null;

    /**
     * @var int $DbState
     */
    protected $DbState = null;

    /**
     * @param \DateTime $PeriodFrom
     * @param \DateTime $PeriodTo
     * @param int $DbState
     */
    public function __construct(?\DateTime $PeriodFrom = null, ?\DateTime $PeriodTo = null, $DbState = null)
    {
        $this->PeriodFrom = $PeriodFrom ? $PeriodFrom->format(\DateTime::ATOM) : null;
        $this->PeriodTo = $PeriodTo ? $PeriodTo->format(\DateTime::ATOM) : null;
        $this->DbState = $DbState;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodFrom()
    {
        if ($this->PeriodFrom == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->PeriodFrom);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PeriodFrom
     * @return \Defr\CzechDataBox\Api\tdbPeriod
     */
    public function setPeriodFrom(\DateTime $PeriodFrom)
    {
        $this->PeriodFrom = $PeriodFrom->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodTo()
    {
        if ($this->PeriodTo == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->PeriodTo);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PeriodTo
     * @return \Defr\CzechDataBox\Api\tdbPeriod
     */
    public function setPeriodTo(\DateTime $PeriodTo)
    {
        $this->PeriodTo = $PeriodTo->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getDbState()
    {
        return $this->DbState;
    }

    /**
     * @param int $DbState
     * @return \Defr\CzechDataBox\Api\tdbPeriod
     */
    public function setDbState($DbState)
    {
        $this->DbState = $DbState;
        return $this;
    }
}
