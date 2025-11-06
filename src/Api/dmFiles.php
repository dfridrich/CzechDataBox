<?php

namespace Defr\CzechDataBox\Api;

class dmFiles
{

    /**
     * @var dmExtFile $dmExtFile
     */
    protected $dmExtFile = null;

    /**
     * @var dmFile $dmFile
     */
    protected $dmFile = null;

    /**
     * @param dmExtFile $dmExtFile
     * @param dmFile $dmFile
     */
    public function __construct($dmExtFile = null, $dmFile = null)
    {
      $this->dmExtFile = $dmExtFile;
      $this->dmFile = $dmFile;
    }

    /**
     * @return dmExtFile
     */
    public function getDmExtFile()
    {
      return $this->dmExtFile;
    }

    /**
     * @param dmExtFile $dmExtFile
     * @return \Defr\CzechDataBox\Api\dmFiles
     */
    public function setDmExtFile($dmExtFile)
    {
      $this->dmExtFile = $dmExtFile;
      return $this;
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
     * @return \Defr\CzechDataBox\Api\dmFiles
     */
    public function setDmFile($dmFile)
    {
      $this->dmFile = $dmFile;
      return $this;
    }

}
