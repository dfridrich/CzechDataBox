<?php

namespace Defr\CzechDataBox\Api;

class tGetPasswInfoOutput
{

    /**
     * @var \DateTime $pswExpDate
     */
    protected $pswExpDate = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param \DateTime $pswExpDate
     * @param tDbReqStatus $dbStatus
     */
    public function __construct(\DateTime $pswExpDate = null, $dbStatus = null)
    {
      $this->pswExpDate = $pswExpDate ? $pswExpDate->format(\DateTime::ATOM) : null;
      $this->dbStatus = $dbStatus;
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
          return new \DateTime($this->pswExpDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $pswExpDate
     * @return \Defr\CzechDataBox\Api\tGetPasswInfoOutput
     */
    public function setPswExpDate(\DateTime $pswExpDate)
    {
      $this->pswExpDate = $pswExpDate->format(\DateTime::ATOM);
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
