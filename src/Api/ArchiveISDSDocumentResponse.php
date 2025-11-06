<?php

namespace Defr\CzechDataBox\Api;

class ArchiveISDSDocumentResponse
{

    /**
     * @var base64Binary $dmResultDoc
     */
    protected $dmResultDoc = null;

    /**
     * @var date $nextStampTo
     */
    protected $nextStampTo = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param base64Binary $dmResultDoc
     * @param date $nextStampTo
     * @param tStatus $dmStatus
     */
    public function __construct($dmResultDoc = null, $nextStampTo = null, $dmStatus = null)
    {
      $this->dmResultDoc = $dmResultDoc;
      $this->nextStampTo = $nextStampTo;
      $this->dmStatus = $dmStatus;
    }

    /**
     * @return base64Binary
     */
    public function getDmResultDoc()
    {
      return $this->dmResultDoc;
    }

    /**
     * @param base64Binary $dmResultDoc
     * @return \Defr\CzechDataBox\Api\ArchiveISDSDocumentResponse
     */
    public function setDmResultDoc($dmResultDoc)
    {
      $this->dmResultDoc = $dmResultDoc;
      return $this;
    }

    /**
     * @return date
     */
    public function getNextStampTo()
    {
      return $this->nextStampTo;
    }

    /**
     * @param date $nextStampTo
     * @return \Defr\CzechDataBox\Api\ArchiveISDSDocumentResponse
     */
    public function setNextStampTo($nextStampTo)
    {
      $this->nextStampTo = $nextStampTo;
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
     * @return \Defr\CzechDataBox\Api\ArchiveISDSDocumentResponse
     */
    public function setDmStatus($dmStatus)
    {
      $this->dmStatus = $dmStatus;
      return $this;
    }

}
