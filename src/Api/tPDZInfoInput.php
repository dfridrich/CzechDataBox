<?php

namespace Defr\CzechDataBox\Api;

class tPDZInfoInput
{
    /**
     * @var tIdDb
     */
    protected $PDZSender = null;

    /**
     * @param tIdDb $PDZSender
     */
    public function __construct($PDZSender = null)
    {
        $this->PDZSender = $PDZSender;
    }

    /**
     * @return tIdDb
     */
    public function getPDZSender()
    {
        return $this->PDZSender;
    }

    /**
     * @param tIdDb $PDZSender
     *
     * @return \Defr\CzechDataBox\Api\tPDZInfoInput
     */
    public function setPDZSender($PDZSender)
    {
        $this->PDZSender = $PDZSender;

        return $this;
    }
}
