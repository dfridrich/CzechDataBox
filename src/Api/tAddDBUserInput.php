<?php

namespace Defr\CzechDataBox\Api;

class tAddDBUserInput
{
    /**
     * @var tDbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var tDbUserInfo
     */
    protected $dbUserInfo = null;

    /**
     * @var bool
     */
    protected $dbVirtual = null;

    /**
     * @var string
     */
    protected $email = null;

    /**
     * @var bool
     */
    protected $dbApproved = null;

    /**
     * @var string
     */
    protected $dbExternRefNumber = null;

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @param tDbUserInfo  $dbUserInfo
     * @param bool         $dbVirtual
     * @param string       $email
     * @param bool         $dbApproved
     * @param string       $dbExternRefNumber
     */
    public function __construct($dbOwnerInfo = null, $dbUserInfo = null, $dbVirtual = null, $email = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        $this->dbUserInfo = $dbUserInfo;
        $this->dbVirtual = $dbVirtual;
        $this->email = $email;
        $this->dbApproved = $dbApproved;
        $this->dbExternRefNumber = $dbExternRefNumber;
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
     *
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
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
     *
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
     */
    public function setDbUserInfo($dbUserInfo)
    {
        $this->dbUserInfo = $dbUserInfo;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDbVirtual()
    {
        return $this->dbVirtual;
    }

    /**
     * @param bool $dbVirtual
     *
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
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
     *
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDbApproved()
    {
        return $this->dbApproved;
    }

    /**
     * @param bool $dbApproved
     *
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
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
     *
     * @return \Defr\CzechDataBox\Api\tAddDBUserInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;

        return $this;
    }
}
