<?php

namespace Defr\CzechDataBox\Api;

class tNewAccDataInput
{

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @param tDbUserInfo $dbUserInfo
     * @param boolean $dbFeePaid
     * @param boolean $dbVirtual
     * @param string $email
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct(protected $dbOwnerInfo = null, protected $dbUserInfo = null, protected $dbFeePaid = null, protected $dbVirtual = null, protected $email = null, protected $dbApproved = null, protected $dbExternRefNumber = null)
    {
    }


    /**
     * @return tDbOwnerInfo
     */
    public function getDbOwnerInfo()
    {
        return $this->dbOwnerInfo;
    }


    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        return $this;
    }


    /**
     * @return tDbUserInfo
     */
    public function getDbUserInfo()
    {
        return $this->dbUserInfo;
    }


    /**
     * @param tDbUserInfo $dbUserInfo
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setDbUserInfo($dbUserInfo)
    {
        $this->dbUserInfo = $dbUserInfo;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDbFeePaid()
    {
        return $this->dbFeePaid;
    }


    /**
     * @param boolean $dbFeePaid
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setDbFeePaid($dbFeePaid)
    {
        $this->dbFeePaid = $dbFeePaid;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDbVirtual()
    {
        return $this->dbVirtual;
    }


    /**
     * @param boolean $dbVirtual
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setDbVirtual($dbVirtual)
    {
        $this->dbVirtual = $dbVirtual;
        return $this;
    }


    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @param string $email
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getDbApproved()
    {
        return $this->dbApproved;
    }


    /**
     * @param boolean $dbApproved
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setDbApproved($dbApproved)
    {
        $this->dbApproved = $dbApproved;
        return $this;
    }


    /**
     * @return string
     */
    public function getDbExternRefNumber()
    {
        return $this->dbExternRefNumber;
    }


    /**
     * @param string $dbExternRefNumber
     * @return \Defr\CzechDataBox\Api\tNewAccDataInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }

}
