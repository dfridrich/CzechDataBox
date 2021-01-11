<?php

namespace Defr\CzechDataBox\Api;

class tMessageCreateInput
{

    /**
     * @var dmEnvelope $dmEnvelope
     */
    protected $dmEnvelope = null;

    /**
     * @var tFilesArray $dmFiles
     */
    protected $dmFiles = null;

    /**
     * @param dmEnvelope $dmEnvelope
     * @param tFilesArray $dmFiles
     */
    public function __construct($dmEnvelope = null, $dmFiles = null)
    {
      $this->dmEnvelope = $dmEnvelope;
      $this->dmFiles = $dmFiles;
    }

    /**
     * @return dmEnvelope
     */
    public function getDmEnvelope()
    {
      return $this->dmEnvelope;
    }

    /**
     * @param dmEnvelope $dmEnvelope
     * @return \Defr\CzechDataBox\Api\tMessageCreateInput
     */
    public function setDmEnvelope($dmEnvelope)
    {
      $this->dmEnvelope = $dmEnvelope;
      return $this;
    }

    /**
     * @return tFilesArray
     */
    public function getDmFiles()
    {
      return $this->dmFiles;
    }

    /**
     * @param tFilesArray $dmFiles
     * @return \Defr\CzechDataBox\Api\tMessageCreateInput
     */
    public function setDmFiles($dmFiles)
    {
      $this->dmFiles = $dmFiles;
      return $this;
    }

}
