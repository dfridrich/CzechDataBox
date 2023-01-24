<?php

namespace Defr\CzechDataBox\Api;

class tAuthenticateMessageInput
{

    protected base64Binary $dmMessage = null;

    /**
     * @param base64Binary $dmMessage
     */
    public function __construct($dmMessage = null)
    {
        $this->dmMessage = $dmMessage;
    }


    /**
     * @return base64Binary
     */
    public function getDmMessage()
    {
        return $this->dmMessage;
    }


    /**
     * @param base64Binary $dmMessage
     * @return \Defr\CzechDataBox\Api\tAuthenticateMessageInput
     */
    public function setDmMessage($dmMessage)
    {
        $this->dmMessage = $dmMessage;
        return $this;
    }

}
