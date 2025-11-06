<?php

namespace Defr\CzechDataBox\Api;

class tDbReqStatus
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
     * @var string $dbStatusRefNumber
     */
    protected $dbStatusRefNumber = null;

    /**
     * @param string $dbStatusCode
     * @param string $dbStatusMessage
     * @param string $dbStatusRefNumber
     */
    public function __construct($dbStatusCode = null, $dbStatusMessage = null, $dbStatusRefNumber = null)
    {
        $this->dbStatusCode = $dbStatusCode;
        $this->dbStatusMessage = $dbStatusMessage;
        $this->dbStatusRefNumber = $dbStatusRefNumber;
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
     * @return \Defr\CzechDataBox\Api\tDbReqStatus
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
     * @return \Defr\CzechDataBox\Api\tDbReqStatus
     */
    public function setDbStatusMessage($dbStatusMessage)
    {
        $this->dbStatusMessage = $dbStatusMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getDbStatusRefNumber()
    {
        return $this->dbStatusRefNumber;
    }

    /**
     * @param string $dbStatusRefNumber
     * @return \Defr\CzechDataBox\Api\tDbReqStatus
     */
    public function setDbStatusRefNumber($dbStatusRefNumber)
    {
        $this->dbStatusRefNumber = $dbStatusRefNumber;
        return $this;
    }
}
