<?php

namespace Defr\CzechDataBox\Api;

class tChangeDBsTypeInput
{

    /**
     * @var string $refNumber
     */
    protected $refNumber = null;

    /**
     * @var string $newDBType
     */
    protected $newDBType = null;

    /**
     * @var base64Binary $IDsFile
     */
    protected $IDsFile = null;

    /**
     * @param string $refNumber
     * @param string $newDBType
     * @param base64Binary $IDsFile
     */
    public function __construct($refNumber = null, $newDBType = null, $IDsFile = null)
    {
        $this->refNumber = $refNumber;
        $this->newDBType = $newDBType;
        $this->IDsFile = $IDsFile;
    }

    /**
     * @return string
     */
    public function getRefNumber()
    {
        return $this->refNumber;
    }

    /**
     * @param string $refNumber
     * @return \Defr\CzechDataBox\Api\tChangeDBsTypeInput
     */
    public function setRefNumber($refNumber)
    {
        $this->refNumber = $refNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewDBType()
    {
        return $this->newDBType;
    }

    /**
     * @param string $newDBType
     * @return \Defr\CzechDataBox\Api\tChangeDBsTypeInput
     */
    public function setNewDBType($newDBType)
    {
        $this->newDBType = $newDBType;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getIDsFile()
    {
        return $this->IDsFile;
    }

    /**
     * @param base64Binary $IDsFile
     * @return \Defr\CzechDataBox\Api\tChangeDBsTypeInput
     */
    public function setIDsFile($IDsFile)
    {
        $this->IDsFile = $IDsFile;
        return $this;
    }
}
