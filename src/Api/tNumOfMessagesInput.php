<?php

namespace Defr\CzechDataBox\Api;

class tNumOfMessagesInput
{

    /**
     * @var int $statType
     */
    protected $statType = null;

    
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getStatType()
    {
        return $this->statType;
    }

    /**
     * @param int $statType
     * @return \Defr\CzechDataBox\Api\tNumOfMessagesInput
     */
    public function setStatType($statType)
    {
        $this->statType = $statType;
        return $this;
    }
}
