<?php

namespace Defr\CzechDataBox\Api;

class tFindPersonalDBInput
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
     * @return \Defr\CzechDataBox\Api\tFindPersonalDBInput
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        return $this;
    }

}
