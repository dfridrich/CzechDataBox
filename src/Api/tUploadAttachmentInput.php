<?php

namespace Defr\CzechDataBox\Api;

class tUploadAttachmentInput
{

    /**
     * @var dmFile $dmFile
     */
    protected $dmFile = null;


    public function __construct($dmFile = null)
    {
        $this->dmFile = $dmFile;
    }


    public function getDmFile(): ?dmFile
    {
        return $this->dmFile;
    }


    public function setDmFile(dmFile $dmFile): tUploadAttachmentInput
    {
        $this->dmFile = $dmFile;
        return $this;
    }
}
