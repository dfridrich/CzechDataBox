<?php

namespace Defr\CzechDataBox\Api;

class DownloadAttachment
{

    /**
     * @var string $dmID
     */
    protected $dmID = null;

    /**
     * @var int $attNum
     */
    protected $attNum = null;

    /**
     * @param string $dmID
     * @param int $attNum
     */
    public function __construct($dmID = null, $attNum = null)
    {
        $this->dmID = $dmID;
        $this->attNum = $attNum;
    }


    /**
     * @return string
     */
    public function getDmID()
    {
        return $this->dmID;
    }


    /**
     * @param string $dmID
     * @return \Defr\CzechDataBox\Api\DownloadAttachment
     */
    public function setDmID($dmID)
    {
        $this->dmID = $dmID;
        return $this;
    }


    /**
     * @return int
     */
    public function getAttNum()
    {
        return $this->attNum;
    }


    /**
     * @param int $attNum
     * @return \Defr\CzechDataBox\Api\DownloadAttachment
     */
    public function setAttNum($attNum)
    {
        $this->attNum = $attNum;
        return $this;
    }

}
