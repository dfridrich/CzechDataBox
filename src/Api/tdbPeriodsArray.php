<?php

namespace Defr\CzechDataBox\Api;

class tdbPeriodsArray
{

    /**
     * @var tdbPeriod $Period
     */
    protected $Period = null;

    /**
     * @param tdbPeriod $Period
     */
    public function __construct($Period = null)
    {
        $this->Period = $Period;
    }


    /**
     * @return tdbPeriod
     */
    public function getPeriod()
    {
        return $this->Period;
    }


    /**
     * @param tdbPeriod $Period
     * @return \Defr\CzechDataBox\Api\tdbPeriodsArray
     */
    public function setPeriod($Period)
    {
        $this->Period = $Period;
        return $this;
    }

}
