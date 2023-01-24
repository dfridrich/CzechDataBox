<?php

namespace Defr\CzechDataBox\Api;

class tGetDBListOutput
{

    protected base64Binary $dblData = null;

    /**
     * @param base64Binary $dblData
     * @param tDbReqStatus $dbStatus
     */
    public function __construct($dblData = null, protected $dbStatus = null)
    {
        $this->dblData = $dblData;
    }


    /**
     * @return base64Binary
     */
    public function getDblData()
    {
        return $this->dblData;
    }


    /**
     * @param base64Binary $dblData
     * @return \Defr\CzechDataBox\Api\tGetDBListOutput
     */
    public function setDblData($dblData)
    {
        $this->dblData = $dblData;
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
     * @return \Defr\CzechDataBox\Api\tGetDBListOutput
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;
        return $this;
    }

}
