<?php

namespace Defr\CzechDataBox\Api;

class tIdDbInput
{
    /**
     * @var tIdDb
     */
    protected $dbID = null;

    /**
     * @var bool
     */
    protected $dbApproved = null;

    /**
     * @var string
     */
    protected $dbExternRefNumber = null;

    /**
     * @param tIdDb  $dbID
     * @param bool   $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbID = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbID = $dbID;
        $this->dbApproved = $dbApproved;
        $this->dbExternRefNumber = $dbExternRefNumber;
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
     *
     * @return \Defr\CzechDataBox\Api\tIdDbInput
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;

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
     * @return \Defr\CzechDataBox\Api\tIdDbInput
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
     * @return \Defr\CzechDataBox\Api\tIdDbInput
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;

        return $this;
    }
}
