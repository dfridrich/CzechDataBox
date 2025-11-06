<?php

namespace Defr\CzechDataBox\Api;

class tStatus
{

    /**
     * @var string $dmStatusCode
     */
    protected $dmStatusCode = null;

    /**
     * @var string $dmStatusMessage
     */
    protected $dmStatusMessage = null;

    /**
     * @param string $dmStatusCode
     * @param string $dmStatusMessage
     */
    public function __construct($dmStatusCode = null, $dmStatusMessage = null)
    {
      $this->dmStatusCode = $dmStatusCode;
      $this->dmStatusMessage = $dmStatusMessage;
    }

    /**
     * @return string
     */
    public function getDmStatusCode()
    {
      return $this->dmStatusCode;
    }

    /**
     * @param string $dmStatusCode
     * @return \Defr\CzechDataBox\Api\tStatus
     */
    public function setDmStatusCode($dmStatusCode)
    {
      $this->dmStatusCode = $dmStatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDmStatusMessage()
    {
      return $this->dmStatusMessage;
    }

    /**
     * @param string $dmStatusMessage
     * @return \Defr\CzechDataBox\Api\tStatus
     */
    public function setDmStatusMessage($dmStatusMessage)
    {
      $this->dmStatusMessage = $dmStatusMessage;
      return $this;
    }

}
