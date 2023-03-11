<?php

namespace Defr\CzechDataBox\Api;

class tGetOwnInfoOutput2
{

    /**
     * @var tDbOwnerInfoExt2 $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @var tDbReqStatus $dbStatus
     */
    protected $dbStatus = null;

    /**
     * @param tDbOwnerInfoExt2 $dbOwnerInfo
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dbOwnerInfo = null, $dbStatus = null)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        $this->dbStatus = $dbStatus;
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
     * @return \Defr\CzechDataBox\Api\tGetOwnInfoOutput2
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
        $this->dbOwnerInfo = $dbOwnerInfo;
        return $this;
    }

    /**
     * @return tDbReqStatus
     */
    public function getDbStatus()
    {
        return $this->dbStatus;
    }

    /**
     * @param tDbReqStatus $dbStatus
     * @return \Defr\CzechDataBox\Api\tGetOwnInfoOutput2
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }
}
