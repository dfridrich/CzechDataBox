<?php

namespace Defr\CzechDataBox\Api;

use DateTime;
use Exception;

class tStateChangesRecord
{

    /**
     * @var tIdDm $dmID
     */
    protected $dmID = null;

    /**
     * @var \DateTime $dmEventTime
     */
    protected $dmEventTime = null;

    /**
     * @var int $dmMessageStatus
     */
    protected $dmMessageStatus = null;

    /**
     * @param tIdDm $dmID
     * @param \DateTime $dmEventTime
     * @param int $dmMessageStatus
     */
    public function __construct($dmID = null, DateTime $dmEventTime = null, $dmMessageStatus = null)
    {
        $this->dmID = $dmID;
        $this->dmEventTime = $dmEventTime ? $dmEventTime->format(DateTime::ATOM) : null;
        $this->dmMessageStatus = $dmMessageStatus;
    }


    /**
     * @return tIdDm
     */
    public function getDmID()
    {
        return $this->dmID;
    }


    /**
     * @param tIdDm $dmID
     * @return \Defr\CzechDataBox\Api\tStateChangesRecord
     */
    public function setDmID($dmID)
    {
        $this->dmID = $dmID;
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getDmEventTime()
    {
        if ($this->dmEventTime == null) {
            return null;
        } else {
            try {
                return new DateTime($this->dmEventTime);
            } catch (Exception $e) {
                return false;
            }
        }
    }


    /**
     * @param \DateTime $dmEventTime
     * @return \Defr\CzechDataBox\Api\tStateChangesRecord
     */
    public function setDmEventTime(DateTime $dmEventTime)
    {
        $this->dmEventTime = $dmEventTime->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return int
     */
    public function getDmMessageStatus()
    {
        return $this->dmMessageStatus;
    }


    /**
     * @param int $dmMessageStatus
     * @return \Defr\CzechDataBox\Api\tStateChangesRecord
     */
    public function setDmMessageStatus($dmMessageStatus)
    {
        $this->dmMessageStatus = $dmMessageStatus;
        return $this;
    }

}
