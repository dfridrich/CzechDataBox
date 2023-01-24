<?php

namespace Defr\CzechDataBox\Api;

class dmFile
{

    protected anonymous6 $dmFileMetaType = null;

    /**
     * @param string $dmMimeType
     * @param anonymous6 $dmFileMetaType
     * @param string $dmFileGuid
     * @param string $dmUpFileGuid
     * @param string $dmFileDescr
     * @param string $dmFormat
     */
    public function __construct(protected $dmMimeType = null, $dmFileMetaType = null, protected $dmFileGuid = null, protected $dmUpFileGuid = null, protected $dmFileDescr = null, protected $dmFormat = null)
    {
        $this->dmFileMetaType = $dmFileMetaType;
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
     * @return anonymous6
     */
    public function getDmFileMetaType()
    {
        return $this->dmFileMetaType;
    }


    /**
     * @param anonymous6 $dmFileMetaType
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
    public function getDmFormat()
    {
        return $this->dmFormat;
    }


    /**
     * @param string $dmFormat
     * @return \Defr\CzechDataBox\Api\dmFile
     */
    public function setDmFormat($dmFormat)
    {
        $this->dmFormat = $dmFormat;
        return $this;
    }

}
