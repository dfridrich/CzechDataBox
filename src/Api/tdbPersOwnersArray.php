<?php

namespace Defr\CzechDataBox\Api;

class tdbPersOwnersArray
{

    /**
     * @var tdbPersonalOwnerInfo $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @param tdbPersonalOwnerInfo $dbOwnerInfo
     */
    public function __construct($dbOwnerInfo = null)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
    }

    /**
     * @return tdbPersonalOwnerInfo
     */
    public function getDbOwnerInfo()
    {
        return $this->dbOwnerInfo;
    }

    /**
     * @param tdbPersonalOwnerInfo $dbOwnerInfo
     * @return \Defr\CzechDataBox\Api\tdbPersOwnersArray
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        return $this;
    }
}
