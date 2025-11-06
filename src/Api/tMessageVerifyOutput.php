<?php

namespace Defr\CzechDataBox\Api;

class tMessageVerifyOutput
{

    /**
     * @var tHash $dmHash
     */
    protected $dmHash = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param tHash $dmHash
     * @param tStatus $dmStatus
     */
    public function __construct($dmHash = null, $dmStatus = null)
    {
      $this->dmHash = $dmHash;
      $this->dmStatus = $dmStatus;
    }

    /**
     * @return tHash
     */
    public function getDmHash()
    {
      return $this->dmHash;
    }

    /**
     * @param tHash $dmHash
     * @return \Defr\CzechDataBox\Api\tMessageVerifyOutput
     */
    public function setDmHash($dmHash)
    {
      $this->dmHash = $dmHash;
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
     * @return \Defr\CzechDataBox\Api\tMessageVerifyOutput
     */
    public function setDmStatus($dmStatus)
    {
      $this->dmStatus = $dmStatus;
      return $this;
    }

}
