<?php

namespace Defr\CzechDataBox\Api;

class dmMessageAuthor
{

    /**
     * @var maItem $maItem
     */
    protected $maItem = null;

    /**
     * @param maItem $maItem
     */
    public function __construct($maItem = null)
    {
        $this->maItem = $maItem;
    }


    /**
     * @return maItem
     */
    public function getMaItem()
    {
        return $this->maItem;
    }


    /**
     * @param maItem $maItem
     * @return \Defr\CzechDataBox\Api\dmMessageAuthor
     */
    public function setMaItem($maItem)
    {
        $this->maItem = $maItem;
        return $this;
    }

}
