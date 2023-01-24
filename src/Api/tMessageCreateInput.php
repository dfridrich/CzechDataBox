<?php

namespace Defr\CzechDataBox\Api;

class tMessageCreateInput
{

    /**
     * @param dmEnvelope $dmEnvelope
     * @param tFilesArray $dmFiles
     */
    public function __construct(protected $dmEnvelope = null, protected $dmFiles = null)
    {
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
