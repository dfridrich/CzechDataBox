<?php

namespace Defr\CzechDataBox\Api;

class tConstRecord
{

    /**
     * @var string $cName
     */
    protected $cName = null;

    /**
     * @var string $cValue
     */
    protected $cValue = null;

    /**
     * @var date $cFrom
     */
    protected $cFrom = null;

    /**
     * @var date $cTo
     */
    protected $cTo = null;

    /**
     * @param string $cName
     * @param string $cValue
     * @param date $cFrom
     * @param date $cTo
     */
    public function __construct($cName = null, $cValue = null, $cFrom = null, $cTo = null)
    {
      $this->cName = $cName;
      $this->cValue = $cValue;
      $this->cFrom = $cFrom;
      $this->cTo = $cTo;
    }

    /**
     * @return string
     */
    public function getCName()
    {
      return $this->cName;
    }

    /**
     * @param string $cName
     * @return \Defr\CzechDataBox\Api\tConstRecord
     */
    public function setCName($cName)
    {
      $this->cName = $cName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCValue()
    {
      return $this->cValue;
    }

    /**
     * @param string $cValue
     * @return \Defr\CzechDataBox\Api\tConstRecord
     */
    public function setCValue($cValue)
    {
      $this->cValue = $cValue;
      return $this;
    }

    /**
     * @return date
     */
    public function getCFrom()
    {
      return $this->cFrom;
    }

    /**
     * @param date $cFrom
     * @return \Defr\CzechDataBox\Api\tConstRecord
     */
    public function setCFrom($cFrom)
    {
      $this->cFrom = $cFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getCTo()
    {
      return $this->cTo;
    }

    /**
     * @param date $cTo
     * @return \Defr\CzechDataBox\Api\tConstRecord
     */
    public function setCTo($cTo)
    {
      $this->cTo = $cTo;
      return $this;
    }

}
