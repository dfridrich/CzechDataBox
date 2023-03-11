<?php

namespace Defr\CzechDataBox\Api;

class tChangeLogRow
{

    /**
     * @var string $changeLogRow
     */
    protected $changeLogRow = null;

    /**
     * @param string $changeLogRow
     */
    public function __construct($changeLogRow = null)
    {
        $this->changeLogRow = $changeLogRow;
    }

    /**
     * @return string
     */
    public function getChangeLogRow()
    {
        return $this->changeLogRow;
    }

    /**
     * @param string $changeLogRow
     * @return \Defr\CzechDataBox\Api\tChangeLogRow
     */
    public function setChangeLogRow($changeLogRow)
    {
        $this->changeLogRow = $changeLogRow;
        return $this;
    }
}
