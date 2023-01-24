<?php

namespace Defr\CzechDataBox\Api;

class tMultipleMessageRecipients
{

    /**
     * @param tRecipients $dmRecipient
     */
    public function __construct(protected $dmRecipient = null)
    {
    }


    /**
     * @return tRecipients
     */
    public function getDmRecipient()
    {
        return $this->dmRecipient;
    }


    /**
     * @param tRecipients $dmRecipient
     * @return \Defr\CzechDataBox\Api\tMultipleMessageRecipients
     */
    public function setDmRecipient($dmRecipient)
    {
        $this->dmRecipient = $dmRecipient;
        return $this;
    }

}
