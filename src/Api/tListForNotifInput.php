<?php

namespace Defr\CzechDataBox\Api;

class tListForNotifInput
{

    /**
     * @var \DateTime $ntfFromTime
     */
    protected $ntfFromTime = null;

    /**
     * @var string $ntfScope
     */
    protected $ntfScope = null;

    /**
     * @param \DateTime|null $ntfFromTime
     * @param string $ntfScope
     */
    public function __construct(?\DateTime $ntfFromTime = null, $ntfScope = null)
    {
        $this->ntfFromTime = $ntfFromTime ? $ntfFromTime->format(\DateTime::ATOM) : null;
        $this->ntfScope = $ntfScope;
    }

    /**
     * @return \DateTime
     */
    public function getNtfFromTime()
    {
        if ($this->ntfFromTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ntfFromTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ntfFromTime
     * @return \Defr\CzechDataBox\Api\tListForNotifInput
     */
    public function setNtfFromTime(\DateTime $ntfFromTime)
    {
        $this->ntfFromTime = $ntfFromTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getNtfScope()
    {
        return $this->ntfScope;
    }

    /**
     * @param string $ntfScope
     * @return \Defr\CzechDataBox\Api\tListForNotifInput
     */
    public function setNtfScope($ntfScope)
    {
        $this->ntfScope = $ntfScope;
        return $this;
    }
}
