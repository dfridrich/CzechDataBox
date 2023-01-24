<?php

namespace Defr\CzechDataBox\Api;

class tHash
{

    protected base64Binary $_ = null;

    /**
     * @param base64Binary $_
     * @param string $algorithm
     */
    public function __construct($_ = null, protected $algorithm = null)
    {
        $this->_ = $_;
    }


    /**
     * @return base64Binary
     */
    public function get_()
    {
        return $this->_;
    }


    /**
     * @param base64Binary $_
     * @return \Defr\CzechDataBox\Api\tHash
     */
    public function set_($_)
    {
        $this->_ = $_;
        return $this;
    }


    /**
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }


    /**
     * @param string $algorithm
     * @return \Defr\CzechDataBox\Api\tHash
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

}
