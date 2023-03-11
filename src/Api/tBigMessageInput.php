<?php

namespace Defr\CzechDataBox\Api;

class tBigMessageInput
{

    /**
     * @var tBigMessEnvelope $dmEnvelope
     */
    protected $dmEnvelope = null;

    /**
     * @var dmFiles $dmFiles
     */
    protected $dmFiles = null;

    /**
     * @param tBigMessEnvelope $dmEnvelope
     * @param dmFiles $dmFiles
     */
    public function __construct($dmEnvelope = null, $dmFiles = null)
    {
        $this->dmEnvelope = $dmEnvelope;
        $this->dmFiles = $dmFiles;
    }

    /**
     * @return tBigMessEnvelope
     */
    public function getDmEnvelope()
    {
        return $this->dmEnvelope;
    }

    /**
     * @param tBigMessEnvelope $dmEnvelope
     * @return \Defr\CzechDataBox\Api\tBigMessageInput
     */
    public function setDmEnvelope($dmEnvelope)
    {
        $this->dmEnvelope = $dmEnvelope;
        return $this;
    }

    /**
     * @return dmFiles
     */
    public function getDmFiles()
    {
        return $this->dmFiles;
    }

    /**
     * @param dmFiles $dmFiles
     * @return \Defr\CzechDataBox\Api\tBigMessageInput
     */
    public function setDmFiles($dmFiles)
    {
        $this->dmFiles = $dmFiles;
        return $this;
    }
}
