<?php

namespace Defr\CzechDataBox\Api;

class tPDZSendInput
{

    /**
     * @var tIdDb $dbId
     */
    protected $dbId = null;

    /**
     * @var PDZType $PDZType
     */
    protected $PDZType = null;

    /**
     * @param tIdDb $dbId
     * @param PDZType $PDZType
     */
    public function __construct($dbId = null, $PDZType = null)
    {
        $this->dbId = $dbId;
        $this->PDZType = $PDZType;
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
     * @return \Defr\CzechDataBox\Api\tPDZSendInput
     */
    public function setDbId($dbId)
    {
        $this->dbId = $dbId;
        return $this;
    }


    /**
     * @return PDZType
     */
    public function getPDZType()
    {
        return $this->PDZType;
    }


    /**
     * @param PDZType $PDZType
     * @return \Defr\CzechDataBox\Api\tPDZSendInput
     */
    public function setPDZType($PDZType)
    {
        $this->PDZType = $PDZType;
        return $this;
    }

}
