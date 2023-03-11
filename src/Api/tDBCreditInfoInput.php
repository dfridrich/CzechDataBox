<?php

namespace Defr\CzechDataBox\Api;

class tDBCreditInfoInput
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

    /**
     * @var date $ciFromDate
     */
    protected $ciFromDate = null;

    /**
     * @var date $ciTodate
     */
    protected $ciTodate = null;

    /**
     * @param tIdDb $dbID
     * @param date $ciFromDate
     * @param date $ciTodate
     */
    public function __construct($dbID = null, $ciFromDate = null, $ciTodate = null)
    {
        $this->dbID = $dbID;
        $this->ciFromDate = $ciFromDate;
        $this->ciTodate = $ciTodate;
    }


    /**
     * @return tIdDb
     */
    public function getDbID()
    {
        return $this->dbID;
    }


    /**
     * @param tIdDb $dbID
     * @return \Defr\CzechDataBox\Api\tDBCreditInfoInput
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }


    /**
     * @return date
     */
    public function getCiFromDate()
    {
        return $this->ciFromDate;
    }


    /**
     * @param date $ciFromDate
     * @return \Defr\CzechDataBox\Api\tDBCreditInfoInput
     */
    public function setCiFromDate($ciFromDate)
    {
        $this->ciFromDate = $ciFromDate;
        return $this;
    }


    /**
     * @return date
     */
    public function getCiTodate()
    {
        return $this->ciTodate;
    }


    /**
     * @param date $ciTodate
     * @return \Defr\CzechDataBox\Api\tDBCreditInfoInput
     */
    public function setCiTodate($ciTodate)
    {
        $this->ciTodate = $ciTodate;
        return $this;
    }

}
