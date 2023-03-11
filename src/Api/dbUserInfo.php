<?php

namespace Defr\CzechDataBox\Api;

class dbUserInfo
{

    /**
     * @var string $AIFOTicket
     */
    protected $AIFOTicket = null;

    /**
     * @param string $AIFOTicket
     */
    public function __construct($AIFOTicket = null)
    {
        $this->AIFOTicket = $AIFOTicket;
    }


    /**
     * @return string
     */
    public function getAIFOTicket()
    {
        return $this->AIFOTicket;
    }


    /**
     * @param string $AIFOTicket
     * @return \Defr\CzechDataBox\Api\dbUserInfo
     */
    public function setAIFOTicket($AIFOTicket)
    {
        $this->AIFOTicket = $AIFOTicket;
        return $this;
    }

}
