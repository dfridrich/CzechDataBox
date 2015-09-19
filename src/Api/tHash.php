<?php

namespace Defr\CzechDataBox\Api;

class tHash
{
    /**
     * @var base64Binary
     */
    protected $_ = null;

    /**
     * @var string
     */
    protected $algorithm = null;

    /**
     * @param base64Binary $_
     * @param string       $algorithm
     */
    public function __construct($_ = null, $algorithm = null)
    {
        $this->_ = $_;
        $this->algorithm = $algorithm;
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
     *
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
     *
     * @return \Defr\CzechDataBox\Api\tHash
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;

        return $this;
    }
}
