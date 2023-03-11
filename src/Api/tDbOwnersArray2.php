<?php

namespace Defr\CzechDataBox\Api;

class tDbOwnersArray2
{

    /**
     * @var tDbOwnerInfoExt2 $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @param tDbOwnerInfoExt2 $dbOwnerInfo
     */
    public function __construct($dbOwnerInfo = null)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
    }

    /**
     * @return tDbOwnerInfoExt2
     */
    public function getDbOwnerInfo()
    {
        return $this->dbOwnerInfo;
    }

    /**
     * @param tDbOwnerInfoExt2 $dbOwnerInfo
     * @return \Defr\CzechDataBox\Api\tDbOwnersArray2
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        return $this;
    }
}
