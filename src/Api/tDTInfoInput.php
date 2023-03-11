<?php

namespace Defr\CzechDataBox\Api;

class tDTInfoInput
{

    /**
     * @var tIdDb $dbId
     */
    protected $dbId = null;

    /**
     * @param tIdDb $dbId
     */
    public function __construct($dbId = null)
    {
        $this->dbId = $dbId;
    }


    /**
     * @return tIdDb
     */
    public function getDbId()
    {
        return $this->dbId;
    }


    /**
     * @param tIdDb $dbId
     * @return \Defr\CzechDataBox\Api\tDTInfoInput
     */
    public function setDbId($dbId)
    {
        $this->dbId = $dbId;
        return $this;
    }

}
