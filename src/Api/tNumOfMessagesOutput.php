<?php

namespace Defr\CzechDataBox\Api;

class tNumOfMessagesOutput
{
    /**
     * @var int
     */
    protected $statResult = null;

    /**
     * @var \DateTime
     */
    protected $statTime = null;

    /**
     * @var tStatReqStatus
     */
    protected $dbStatus = null;

    /**
     * @param \DateTime $statTime
     */
    public function __construct(\DateTime $statTime = null)
    {
        $this->statTime = $statTime ? $statTime->format(\DateTime::ATOM) : null;
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
     *
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
            return;
        } else {
            try {
                return new \DateTime($this->statTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $statTime
     *
     * @return \Defr\CzechDataBox\Api\tNumOfMessagesOutput
     */
    public function setStatTime(\DateTime $statTime)
    {
        $this->statTime = $statTime->format(\DateTime::ATOM);

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
     *
     * @return \Defr\CzechDataBox\Api\tNumOfMessagesOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;

        return $this;
    }
}
