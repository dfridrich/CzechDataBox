<?php

namespace Defr\CzechDataBox\Api;

class UploadAttachmentResponse
{

    /**
     * @var string $dmAttID
     */
    protected $dmAttID = null;

    /**
     * @var dmAttHash1 $dmAttHash1
     */
    protected $dmAttHash1 = null;

    /**
     * @var dmAttHash2 $dmAttHash2
     */
    protected $dmAttHash2 = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param string $dmAttID
     * @param dmAttHash1 $dmAttHash1
     * @param dmAttHash2 $dmAttHash2
     * @param tStatus $dmStatus
     */
    public function __construct($dmAttID = null, $dmAttHash1 = null, $dmAttHash2 = null, $dmStatus = null)
    {
      $this->dmAttID = $dmAttID;
      $this->dmAttHash1 = $dmAttHash1;
      $this->dmAttHash2 = $dmAttHash2;
      $this->dmStatus = $dmStatus;
    }

    /**
     * @return string
     */
    public function getDmAttID()
    {
      return $this->dmAttID;
    }

    /**
     * @param string $dmAttID
     * @return \Defr\CzechDataBox\Api\UploadAttachmentResponse
     */
    public function setDmAttID($dmAttID)
    {
      $this->dmAttID = $dmAttID;
      return $this;
    }

    /**
     * @return dmAttHash1
     */
    public function getDmAttHash1()
    {
      return $this->dmAttHash1;
    }

    /**
     * @param dmAttHash1 $dmAttHash1
     * @return \Defr\CzechDataBox\Api\UploadAttachmentResponse
     */
    public function setDmAttHash1($dmAttHash1)
    {
      $this->dmAttHash1 = $dmAttHash1;
      return $this;
    }

    /**
     * @return dmAttHash2
     */
    public function getDmAttHash2()
    {
      return $this->dmAttHash2;
    }

    /**
     * @param dmAttHash2 $dmAttHash2
     * @return \Defr\CzechDataBox\Api\UploadAttachmentResponse
     */
    public function setDmAttHash2($dmAttHash2)
    {
      $this->dmAttHash2 = $dmAttHash2;
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
     * @return \Defr\CzechDataBox\Api\UploadAttachmentResponse
     */
    public function setDmStatus($dmStatus)
    {
      $this->dmStatus = $dmStatus;
      return $this;
    }

}
