<?php

namespace Defr\CzechDataBox\Api;

class tMultipleMessageRecipients
{

    /**
     * @var tRecipients $dmRecipient
     */
    protected $dmRecipient = null;

    /**
     * @param tRecipients $dmRecipient
     */
    public function __construct($dmRecipient = null)
    {
        $this->dmRecipient = $dmRecipient;
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
