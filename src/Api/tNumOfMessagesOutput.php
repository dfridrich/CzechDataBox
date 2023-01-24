<?php

namespace Defr\CzechDataBox\Api;

use DateTime;
use Exception;

class tNumOfMessagesOutput
{

    protected int $statResult = null;

    protected DateTime $statTime = null;

    protected tStatReqStatus $dbStatus = null;

    public function __construct(DateTime $statTime = null)
    {
        $this->statTime = $statTime !== null ? $statTime->format(DateTime::ATOM) : null;
    }


    /**
     * @return int
     */
    public function getStatResult()
    {
        return $this->statResult;
    }


    /**
     * @param int $statResult
     * @return \Defr\CzechDataBox\Api\tNumOfMessagesOutput
     */
    public function setStatResult($statResult)
    {
        $this->statResult = $statResult;
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getStatTime()
    {
        if ($this->statTime == null) {
            return null;
        } else {
            try {
                return new DateTime($this->statTime);
            } catch (Exception) {
                return false;
            }
        }
    }


    /**
     * @return \Defr\CzechDataBox\Api\tNumOfMessagesOutput
     */
    public function setStatTime(DateTime $statTime)
    {
        $this->statTime = $statTime->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return tStatReqStatus
     */
    public function getDbStatus()
    {
        return $this->dbStatus;
    }


    /**
     * @param tStatReqStatus $dbStatus
     * @return \Defr\CzechDataBox\Api\tNumOfMessagesOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
