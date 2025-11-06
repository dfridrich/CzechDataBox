<?php

namespace Defr\CzechDataBox\Api;

class dmAttHash1
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $AttHashAlg
     */
    protected $AttHashAlg = null;

    /**
     * @param string $_
     * @param string $AttHashAlg
     */
    public function __construct($_ = null, $AttHashAlg = null)
    {
      $this->_ = $_;
      $this->AttHashAlg = $AttHashAlg;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \Defr\CzechDataBox\Api\dmAttHash1
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttHashAlg()
    {
      return $this->AttHashAlg;
    }

    /**
     * @param string $AttHashAlg
     * @return \Defr\CzechDataBox\Api\dmAttHash1
     */
    public function setAttHashAlg($AttHashAlg)
    {
      $this->AttHashAlg = $AttHashAlg;
      return $this;
    }

}
