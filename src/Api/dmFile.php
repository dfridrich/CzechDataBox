<?php

namespace Defr\CzechDataBox\Api;

class dmFile
{

    /**
     * @var base64Binary $dmEncodedContent
     */
    protected $dmEncodedContent = null;

    /**
     * @var string $dmFileMetaType
     */
    protected $dmFileMetaType = null;

    /**
     * @var string $dmFileDescr
     */
    protected $dmFileDescr = null;

    /**
     * @var string $dmMimeType
     */
    protected $dmMimeType = null;

    /**
     * @var string $dmFileGuid
     */
    protected $dmFileGuid = null;

    /**
     * @var string $dmUpFileGuid
     */
    protected $dmUpFileGuid = null;

    /**
     * @param base64Binary $dmEncodedContent
     * @param string $dmFileMetaType
     * @param string $dmFileDescr
     * @param string $dmMimeType
     * @param string $dmFileGuid
     * @param string $dmUpFileGuid
     */
    public function __construct($dmEncodedContent = null, $dmFileMetaType = null, $dmFileDescr = null, $dmMimeType = null, $dmFileGuid = null, $dmUpFileGuid = null)
    {
        $this->dmEncodedContent = $dmEncodedContent;
        $this->dmFileMetaType = $dmFileMetaType;
        $this->dmFileDescr = $dmFileDescr;
        $this->dmMimeType = $dmMimeType;
        $this->dmFileGuid = $dmFileGuid;
        $this->dmUpFileGuid = $dmUpFileGuid;
    }

    /**
     * @return base64Binary
     */
    public function getDmEncodedContent()
    {
        return $this->dmEncodedContent;
    }

    /**
     * @param base64Binary $dmEncodedContent
     * @return \Defr\CzechDataBox\Api\dmFile
     */
    public function setDmEncodedContent($dmEncodedContent)
    {
        $this->dmEncodedContent = $dmEncodedContent;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmFileMetaType()
    {
        return $this->dmFileMetaType;
    }

    /**
     * @param string $dmFileMetaType
     * @return \Defr\CzechDataBox\Api\dmFile
     */
    public function setDmFileMetaType($dmFileMetaType)
    {
        $this->dmFileMetaType = $dmFileMetaType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmFileDescr()
    {
        return $this->dmFileDescr;
    }

    /**
     * @param string $dmFileDescr
     * @return \Defr\CzechDataBox\Api\dmFile
     */
    public function setDmFileDescr($dmFileDescr)
    {
        $this->dmFileDescr = $dmFileDescr;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmMimeType()
    {
        return $this->dmMimeType;
    }

    /**
     * @param string $dmMimeType
     * @return \Defr\CzechDataBox\Api\dmFile
     */
    public function setDmMimeType($dmMimeType)
    {
        $this->dmMimeType = $dmMimeType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmFileGuid()
    {
        return $this->dmFileGuid;
    }

    /**
     * @param string $dmFileGuid
     * @return \Defr\CzechDataBox\Api\dmFile
     */
    public function setDmFileGuid($dmFileGuid)
    {
        $this->dmFileGuid = $dmFileGuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmUpFileGuid()
    {
        return $this->dmUpFileGuid;
    }

    /**
     * @param string $dmUpFileGuid
     * @return \Defr\CzechDataBox\Api\dmFile
     */
    public function setDmUpFileGuid($dmUpFileGuid)
    {
        $this->dmUpFileGuid = $dmUpFileGuid;
        return $this;
    }
}
