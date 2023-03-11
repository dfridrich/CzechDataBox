<?php

namespace Defr\CzechDataBox\Api;

class tFilesArray
{

    /**
     * @var dmFile $dmFile
     */
    protected $dmFile = null;

    /**
     * @param dmFile $dmFile
     */
    public function __construct($dmFile = null)
    {
        $this->dmFile = $dmFile;
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
     * @return \Defr\CzechDataBox\Api\tFilesArray
     */
    public function setDmFile($dmFile)
    {
        $this->dmFile = $dmFile;
        return $this;
    }

}
