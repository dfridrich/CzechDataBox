<?php

namespace Defr\CzechDataBox\Api;

class tNumOfMessagesInput
{

    protected int $statType = null;


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
