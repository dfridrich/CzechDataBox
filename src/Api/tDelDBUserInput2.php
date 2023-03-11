<?php

namespace Defr\CzechDataBox\Api;

class tDelDBUserInput2
{

    /**
     * @var dbID $dbID
     */
    protected $dbID = null;

    /**
     * @var tIsdsID $isdsID
     */
    protected $isdsID = null;

    /**
     * @var boolean $dbApproved
     */
    protected $dbApproved = null;

    /**
     * @var string $dbExternRefNumber
     */
    protected $dbExternRefNumber = null;

    /**
     * @param dbID $dbID
     * @param tIsdsID $isdsID
     * @param boolean $dbApproved
     * @param string $dbExternRefNumber
     */
    public function __construct($dbID = null, $isdsID = null, $dbApproved = null, $dbExternRefNumber = null)
    {
        $this->dbID = $dbID;
        $this->isdsID = $isdsID;
        $this->dbApproved = $dbApproved;
        $this->dbExternRefNumber = $dbExternRefNumber;
    }


    /**
     * @return dbID
     */
    public function getDbID()
    {
        return $this->dbID;
    }


    /**
     * @param dbID $dbID
     * @return \Defr\CzechDataBox\Api\tDelDBUserInput2
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }


    /**
     * @return tIsdsID
     */
    public function getIsdsID()
    {
        return $this->isdsID;
    }


    /**
     * @param tIsdsID $isdsID
     * @return \Defr\CzechDataBox\Api\tDelDBUserInput2
     */
    public function setIsdsID($isdsID)
    {
        $this->isdsID = $isdsID;
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
     * @return \Defr\CzechDataBox\Api\tDelDBUserInput2
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
     * @return \Defr\CzechDataBox\Api\tDelDBUserInput2
     */
    public function setDbExternRefNumber($dbExternRefNumber)
    {
        $this->dbExternRefNumber = $dbExternRefNumber;
        return $this;
    }

}
