<?php

namespace Defr\CzechDataBox\Api;

class RegisterForNotifications
{

    /**
     * @var int $action
     */
    protected $action = null;

    /**
     * @param int $action
     */
    public function __construct($action = null)
    {
        $this->action = $action;
    }

    /**
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param int $action
     * @return \Defr\CzechDataBox\Api\RegisterForNotifications
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }
}
