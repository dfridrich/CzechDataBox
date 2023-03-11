<?php

namespace Defr\CzechDataBox\Api;

class tStatReqStatus
{

    /**
     * @var string $dbStatusCode
     */
    protected $dbStatusCode = null;

    /**
     * @var string $dbStatusMessage
     */
    protected $dbStatusMessage = null;

    /**
     * @param string $dbStatusCode
     * @param string $dbStatusMessage
     */
    public function __construct($dbStatusCode = null, $dbStatusMessage = null)
    {
        $this->dbStatusCode = $dbStatusCode;
        $this->dbStatusMessage = $dbStatusMessage;
    }

    /**
     * @return string
     */
    public function getDbStatusCode()
    {
        return $this->dbStatusCode;
    }

    /**
     * @param string $dbStatusCode
     * @return \Defr\CzechDataBox\Api\tStatReqStatus
     */
    public function setDbStatusCode($dbStatusCode)
    {
        $this->dbStatusCode = $dbStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDbStatusMessage()
    {
        return $this->dbStatusMessage;
    }

    /**
     * @param string $dbStatusMessage
     * @return \Defr\CzechDataBox\Api\tStatReqStatus
     */
    public function setDbStatusMessage($dbStatusMessage)
    {
        $this->dbStatusMessage = $dbStatusMessage;
        return $this;
    }
}
