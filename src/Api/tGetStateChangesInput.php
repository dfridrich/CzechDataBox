<?php

namespace Defr\CzechDataBox\Api;

class tGetStateChangesInput
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
     * @param \DateTime $dmFromTime
     * @param \DateTime $dmToTime
     */
    public function __construct(\DateTime $dmFromTime = null, \DateTime $dmToTime = null)
    {
      $this->dmFromTime = $dmFromTime ? $dmFromTime->format(\DateTime::ATOM) : null;
      $this->dmToTime = $dmToTime ? $dmToTime->format(\DateTime::ATOM) : null;
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
     * @return \Defr\CzechDataBox\Api\tGetStateChangesInput
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
     * @return \Defr\CzechDataBox\Api\tGetStateChangesInput
     */
    public function setDmToTime(\DateTime $dmToTime)
    {
      $this->dmToTime = $dmToTime->format(\DateTime::ATOM);
      return $this;
    }

}
