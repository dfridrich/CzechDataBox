<?php

namespace Defr\CzechDataBox\Api;

class GetDataBoxAddress
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

    /**
     * @param tIdDb $dbID
     */
    public function __construct($dbID = null)
    {
        $this->dbID = $dbID;
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
     * @return \Defr\CzechDataBox\Api\GetDataBoxAddress
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }
}
