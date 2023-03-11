<?php

namespace Defr\CzechDataBox\Api;

class tDBCreditInfoOutput
{

    /**
     * @var int $currentCredit
     */
    protected $currentCredit = null;

    /**
     * @var string $notifEmail
     */
    protected $notifEmail = null;

    /**
     * @var ciRecords $ciRecords
     */
    protected $ciRecords = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param int $currentCredit
     * @param string $notifEmail
     * @param ciRecords $ciRecords
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($currentCredit = null, $notifEmail = null, $ciRecords = null, $dbStatus = null)
    {
        $this->currentCredit = $currentCredit;
        $this->notifEmail = $notifEmail;
        $this->ciRecords = $ciRecords;
        $this->dbStatus = $dbStatus;
    }


    /**
     * @return int
     */
    public function getCurrentCredit()
    {
        return $this->currentCredit;
    }


    /**
     * @param int $currentCredit
     * @return \Defr\CzechDataBox\Api\tDBCreditInfoOutput
     */
    public function setCurrentCredit($currentCredit)
    {
        $this->currentCredit = $currentCredit;
        return $this;
    }


    /**
     * @return string
     */
    public function getNotifEmail()
    {
        return $this->notifEmail;
    }


    /**
     * @param string $notifEmail
     * @return \Defr\CzechDataBox\Api\tDBCreditInfoOutput
     */
    public function setNotifEmail($notifEmail)
    {
        $this->notifEmail = $notifEmail;
        return $this;
    }


    /**
     * @return ciRecords
     */
    public function getCiRecords()
    {
        return $this->ciRecords;
    }


    /**
     * @param ciRecords $ciRecords
     * @return \Defr\CzechDataBox\Api\tDBCreditInfoOutput
     */
    public function setCiRecords($ciRecords)
    {
        $this->ciRecords = $ciRecords;
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
     * @return \Defr\CzechDataBox\Api\tDBCreditInfoOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
