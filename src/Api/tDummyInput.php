<?php

namespace Defr\CzechDataBox\Api;

class tDummyInput
{

    /**
     * @param string $dbDummy
     */
    public function __construct(protected $dbDummy = null)
    {
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
