<?php

namespace Defr\CzechDataBox\Api;

class tFilesArray
{

    /**
     * @param dmFile $dmFile
     */
    public function __construct(protected $dmFile = null)
    {
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
