<?php

namespace Defr\CzechDataBox\Api;

class tActivateInput
{

    protected tDbAccessDataId $dbAccessDataId = null;

    protected tIdDb $dbID = null;

    /**
     * @param tDbAccessDataId $dbAccessDataId
     * @param tIdDb $dbID
     */
    public function __construct($dbAccessDataId = null, $dbID = null)
    {
        $this->dbAccessDataId = $dbAccessDataId;
        $this->dbID = $dbID;
    }


    /**
     * @return tDbAccessDataId
     */
    public function getDbAccessDataId()
    {
        return $this->dbAccessDataId;
    }


    /**
     * @param tDbAccessDataId $dbAccessDataId
     * @return \Defr\CzechDataBox\Api\tActivateInput
     */
    public function setDbAccessDataId($dbAccessDataId)
    {
        $this->dbAccessDataId = $dbAccessDataId;
        return $this;
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
     * @return \Defr\CzechDataBox\Api\tActivateInput
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }

}
