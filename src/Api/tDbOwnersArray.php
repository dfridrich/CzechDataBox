<?php

namespace Defr\CzechDataBox\Api;

class tDbOwnersArray
{

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     */
    public function __construct(protected $dbOwnerInfo = null)
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
     * @return \Defr\CzechDataBox\Api\tDbOwnersArray
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        return $this;
    }

}
