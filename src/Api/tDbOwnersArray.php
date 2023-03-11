<?php

namespace Defr\CzechDataBox\Api;

class tDbOwnersArray
{

    /**
     * @var tDbOwnerInfoExt $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @param tDbOwnerInfoExt $dbOwnerInfo
     */
    public function __construct($dbOwnerInfo = null)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
    }

    /**
     * @return tDbOwnerInfoExt
     */
    public function getDbOwnerInfo()
    {
        return $this->dbOwnerInfo;
    }

    /**
     * @param tDbOwnerInfoExt $dbOwnerInfo
     * @return \Defr\CzechDataBox\Api\tDbOwnersArray
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        return $this;
    }
}
