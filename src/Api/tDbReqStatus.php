<?php

namespace Defr\CzechDataBox\Api;

class tDbReqStatus
{

    /**
     * @param string $dbStatusCode
     * @param string $dbStatusMessage
     * @param string $dbStatusRefNumber
     */
    public function __construct(protected $dbStatusCode = null, protected $dbStatusMessage = null, protected $dbStatusRefNumber = null)
    {
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
