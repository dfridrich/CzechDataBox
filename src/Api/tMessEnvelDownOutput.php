<?php

namespace Defr\CzechDataBox\Api;

class tMessEnvelDownOutput
{

    /**
     * @var tReturnedMessageEnvelope $dmReturnedMessageEnvelope
     */
    protected $dmReturnedMessageEnvelope = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tReturnedMessageEnvelope $dmReturnedMessageEnvelope
     * @param tStatus $dmStatus
     */
    public function __construct($dmReturnedMessageEnvelope = null, $dmStatus = null)
    {
      $this->dmReturnedMessageEnvelope = $dmReturnedMessageEnvelope;
      $this->dmStatus = $dmStatus;
    }

    /**
     * @return tReturnedMessageEnvelope
     */
    public function getDmReturnedMessageEnvelope()
    {
      return $this->dmReturnedMessageEnvelope;
    }

    /**
     * @param tReturnedMessageEnvelope $dmReturnedMessageEnvelope
     * @return \Defr\CzechDataBox\Api\tMessEnvelDownOutput
     */
    public function setDmReturnedMessageEnvelope($dmReturnedMessageEnvelope)
    {
      $this->dmReturnedMessageEnvelope = $dmReturnedMessageEnvelope;
      return $this;
    }

    /**
     * @return tStatus
     */
    public function getDmStatus()
    {
      return $this->dmStatus;
    }

    /**
     * @param tStatus $dmStatus
     * @return \Defr\CzechDataBox\Api\tMessEnvelDownOutput
     */
    public function setDmStatus($dmStatus)
    {
      $this->dmStatus = $dmStatus;
      return $this;
    }

}
