<?php

namespace Defr\CzechDataBox\Api;

class dmPublishOwnID
{

    /**
     * @var boolean $_
     */
    protected $_ = null;

    /**
     * @var int $IdLevel
     */
    protected $IdLevel = null;

    /**
     * @param boolean $_
     * @param int $IdLevel
     */
    public function __construct($_ = null, $IdLevel = null)
    {
        $this->_ = $_;
        $this->IdLevel = $IdLevel;
    }


    /**
     * @return boolean
     */
    public function get_()
    {
        return $this->_;
    }


    /**
     * @param boolean $_
     * @return \Defr\CzechDataBox\Api\dmPublishOwnID
     */
    public function set_($_)
    {
        $this->_ = $_;
        return $this;
    }


    /**
     * @return int
     */
    public function getIdLevel()
    {
        return $this->IdLevel;
    }


    /**
     * @param int $IdLevel
     * @return \Defr\CzechDataBox\Api\dmPublishOwnID
     */
    public function setIdLevel($IdLevel)
    {
        $this->IdLevel = $IdLevel;
        return $this;
    }

}
