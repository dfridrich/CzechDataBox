<?php

namespace Defr\CzechDataBox\Api;

class DownloadAttachmentResponse
{

    /**
     * @var dmFile $dmFile
     */
    protected $dmFile = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param dmFile $dmFile
     * @param tStatus $dmStatus
     */
    public function __construct($dmFile = null, $dmStatus = null)
    {
      $this->dmFile = $dmFile;
      $this->dmStatus = $dmStatus;
    }

    /**
     * @return dmFile
     */
    public function getDmFile()
    {
      return $this->dmFile;
    }

    /**
     * @param dmFile $dmFile
     * @return \Defr\CzechDataBox\Api\DownloadAttachmentResponse
     */
    public function setDmFile($dmFile)
    {
      $this->dmFile = $dmFile;
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
     * @return \Defr\CzechDataBox\Api\DownloadAttachmentResponse
     */
    public function setDmStatus($dmStatus)
    {
      $this->dmStatus = $dmStatus;
      return $this;
    }

}
