<?php

namespace Defr\CzechDataBox\Api;

class tUploadAttachmentOutput
{

    /**
     * @var UploadAttachmentResponse $uploadAttachment
     */
    protected $uploadAttachment;


    public function __construct(UploadAttachmentResponse $uploadAttachment)
    {
        $this->uploadAttachment = $uploadAttachment;
    }


    public function getUploadAttachment(): UploadAttachmentResponse
    {
        return $this->uploadAttachment;
    }


    public function setUploadAttachment($uploadAttachment): tUploadAttachmentOutput
    {
        $this->uploadAttachment = $uploadAttachment;
        return $this;
    }
}
