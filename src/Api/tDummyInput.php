<?php

namespace Defr\CzechDataBox\Api;

class tDummyInput
{

    /**
     * @var string $dbDummy
     */
    protected $dbDummy = null;

    /**
     * @param string $dbDummy
     */
    public function __construct($dbDummy = null)
    {
        $this->dbDummy = $dbDummy;
    }


    /**
     * @return string
     */
    public function getDbDummy()
    {
        return $this->dbDummy;
    }


    /**
     * @param string $dbDummy
     * @return \Defr\CzechDataBox\Api\tDummyInput
     */
    public function setDbDummy($dbDummy)
    {
        $this->dbDummy = $dbDummy;
        return $this;
    }

}
