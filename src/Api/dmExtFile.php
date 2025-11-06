<?php

namespace Defr\CzechDataBox\Api;

class dmExtFile
{

    /**
     * @var string $dmFileMetaType
     */
    protected $dmFileMetaType = null;

    /**
     * @var string $dmAttID
     */
    protected $dmAttID = null;

    /**
     * @var string $dmAttHash1
     */
    protected $dmAttHash1 = null;

    /**
     * @var string $dmAttHash1Alg
     */
    protected $dmAttHash1Alg = null;

    /**
     * @var string $dmAttHash2
     */
    protected $dmAttHash2 = null;

    /**
     * @var string $dmAttHash2Alg
     */
    protected $dmAttHash2Alg = null;

    /**
     * @var string $dmFileGuid
     */
    protected $dmFileGuid = null;

    /**
     * @var string $dmUpFileGuid
     */
    protected $dmUpFileGuid = null;

    /**
     * @param string $dmFileMetaType
     * @param string $dmAttID
     * @param string $dmAttHash1
     * @param string $dmAttHash1Alg
     * @param string $dmAttHash2
     * @param string $dmAttHash2Alg
     * @param string $dmFileGuid
     * @param string $dmUpFileGuid
     */
    public function __construct($dmFileMetaType = null, $dmAttID = null, $dmAttHash1 = null, $dmAttHash1Alg = null, $dmAttHash2 = null, $dmAttHash2Alg = null, $dmFileGuid = null, $dmUpFileGuid = null)
    {
        $this->dmFileMetaType = $dmFileMetaType;
        $this->dmAttID = $dmAttID;
        $this->dmAttHash1 = $dmAttHash1;
        $this->dmAttHash1Alg = $dmAttHash1Alg;
        $this->dmAttHash2 = $dmAttHash2;
        $this->dmAttHash2Alg = $dmAttHash2Alg;
        $this->dmFileGuid = $dmFileGuid;
        $this->dmUpFileGuid = $dmUpFileGuid;
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
     * @return \Defr\CzechDataBox\Api\dmExtFile
     */
    public function setDmFileMetaType($dmFileMetaType)
    {
        $this->dmFileMetaType = $dmFileMetaType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmAttID()
    {
        return $this->dmAttID;
    }

    /**
     * @param string $dmAttID
     * @return \Defr\CzechDataBox\Api\dmExtFile
     */
    public function setDmAttID($dmAttID)
    {
        $this->dmAttID = $dmAttID;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmAttHash1()
    {
        return $this->dmAttHash1;
    }

    /**
     * @param string $dmAttHash1
     * @return \Defr\CzechDataBox\Api\dmExtFile
     */
    public function setDmAttHash1($dmAttHash1)
    {
        $this->dmAttHash1 = $dmAttHash1;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmAttHash1Alg()
    {
        return $this->dmAttHash1Alg;
    }

    /**
     * @param string $dmAttHash1Alg
     * @return \Defr\CzechDataBox\Api\dmExtFile
     */
    public function setDmAttHash1Alg($dmAttHash1Alg)
    {
        $this->dmAttHash1Alg = $dmAttHash1Alg;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmAttHash2()
    {
        return $this->dmAttHash2;
    }

    /**
     * @param string $dmAttHash2
     * @return \Defr\CzechDataBox\Api\dmExtFile
     */
    public function setDmAttHash2($dmAttHash2)
    {
        $this->dmAttHash2 = $dmAttHash2;
        return $this;
    }

    /**
     * @return string
     */
    public function getDmAttHash2Alg()
    {
        return $this->dmAttHash2Alg;
    }

    /**
     * @param string $dmAttHash2Alg
     * @return \Defr\CzechDataBox\Api\dmExtFile
     */
    public function setDmAttHash2Alg($dmAttHash2Alg)
    {
        $this->dmAttHash2Alg = $dmAttHash2Alg;
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
     * @return \Defr\CzechDataBox\Api\dmExtFile
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
     * @return \Defr\CzechDataBox\Api\dmExtFile
     */
    public function setDmUpFileGuid($dmUpFileGuid)
    {
        $this->dmUpFileGuid = $dmUpFileGuid;
        return $this;
    }
}
