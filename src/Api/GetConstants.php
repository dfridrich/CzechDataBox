<?php

namespace Defr\CzechDataBox\Api;

class GetConstants
{

    /**
     * @var date $constDate
     */
    protected $constDate = null;

    /**
     * @param date $constDate
     */
    public function __construct($constDate = null)
    {
        $this->constDate = $constDate;
    }

    /**
     * @return date
     */
    public function getConstDate()
    {
        return $this->constDate;
    }

    /**
     * @param date $constDate
     * @return \Defr\CzechDataBox\Api\GetConstants
     */
    public function setConstDate($constDate)
    {
        $this->constDate = $constDate;
        return $this;
    }
}
