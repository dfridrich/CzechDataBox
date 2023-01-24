<?php

namespace Defr\CzechDataBox\Api;

use DateTime;
use Exception;

class tGetPasswInfoOutput
{

    protected DateTime $pswExpDate = null;

    /**
     * @param tDbReqStatus $dbStatus
     */
    public function __construct(DateTime $pswExpDate = null, protected $dbStatus = null)
    {
        $this->pswExpDate = $pswExpDate !== null ? $pswExpDate->format(DateTime::ATOM) : null;
    }


    /**
     * @return \DateTime
     */
    public function getPswExpDate()
    {
        if ($this->pswExpDate == null) {
            return null;
        } else {
            try {
                return new DateTime($this->pswExpDate);
            } catch (Exception) {
                return false;
            }
        }
    }


    /**
     * @return \Defr\CzechDataBox\Api\tGetPasswInfoOutput
     */
    public function setPswExpDate(DateTime $pswExpDate)
    {
        $this->pswExpDate = $pswExpDate->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return tDbReqStatus
     */
    public function getDbStatus()
    {
        return $this->dbStatus;
    }


    /**
     * @param tDbReqStatus $dbStatus
     * @return \Defr\CzechDataBox\Api\tGetPasswInfoOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
