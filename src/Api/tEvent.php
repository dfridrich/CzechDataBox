<?php

namespace Defr\CzechDataBox\Api;

class tEvent
{

    /**
     * @var \DateTime $dmEventTime
     */
    protected $dmEventTime = null;

    /**
     * @var string $dmEventDescr
     */
    protected $dmEventDescr = null;

    /**
     * @param \DateTime $dmEventTime
     * @param string $dmEventDescr
     */
    public function __construct(\DateTime $dmEventTime = null, $dmEventDescr = null)
    {
      $this->dmEventTime = $dmEventTime ? $dmEventTime->format(\DateTime::ATOM) : null;
      $this->dmEventDescr = $dmEventDescr;
    }

    /**
     * @return \DateTime
     */
    public function getDmEventTime()
    {
      if ($this->dmEventTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dmEventTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dmEventTime
     * @return \Defr\CzechDataBox\Api\tEvent
     */
    public function setDmEventTime(\DateTime $dmEventTime)
    {
      $this->dmEventTime = $dmEventTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDmEventDescr()
    {
      return $this->dmEventDescr;
    }

    /**
     * @param string $dmEventDescr
     * @return \Defr\CzechDataBox\Api\tEvent
     */
    public function setDmEventDescr($dmEventDescr)
    {
      $this->dmEventDescr = $dmEventDescr;
      return $this;
    }

}
