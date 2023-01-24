<?php

namespace Defr\CzechDataBox\Api;

class tStatReqStatus
{

    /**
     * @param string $dbStatusCode
     * @param string $dbStatusMessage
     */
    public function __construct(protected $dbStatusCode = null, protected $dbStatusMessage = null)
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
