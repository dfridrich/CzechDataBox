<?php

namespace Defr\CzechDataBox\Api;

use DateTime;
use Exception;

class tGetDBStatusInput
{

    /**
     * @var tIdDb $dbID
     */
    protected $dbID = null;

    /**
     * @var \DateTime $baFrom
     */
    protected $baFrom = null;

    /**
     * @var \DateTime $baTo
     */
    protected $baTo = null;

    /**
     * @param tIdDb $dbID
     * @param \DateTime $baFrom
     * @param \DateTime $baTo
     */
    public function __construct($dbID = null, DateTime $baFrom = null, DateTime $baTo = null)
    {
        $this->dbID = $dbID;
        $this->baFrom = $baFrom ? $baFrom->format(DateTime::ATOM) : null;
        $this->baTo = $baTo ? $baTo->format(DateTime::ATOM) : null;
    }


    /**
     * @return tIdDb
     */
    public function getDbID()
    {
        return $this->dbID;
    }


    /**
     * @param tIdDb $dbID
     * @return \Defr\CzechDataBox\Api\tGetDBStatusInput
     */
    public function setDbID($dbID)
    {
        $this->dbID = $dbID;
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getBaFrom()
    {
        if ($this->baFrom == null) {
            return null;
        } else {
            try {
                return new DateTime($this->baFrom);
            } catch (Exception $e) {
                return false;
            }
        }
    }


    /**
     * @param \DateTime $baFrom
     * @return \Defr\CzechDataBox\Api\tGetDBStatusInput
     */
    public function setBaFrom(DateTime $baFrom)
    {
        $this->baFrom = $baFrom->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getBaTo()
    {
        if ($this->baTo == null) {
            return null;
        } else {
            try {
                return new DateTime($this->baTo);
            } catch (Exception $e) {
                return false;
            }
        }
    }


    /**
     * @param \DateTime $baTo
     * @return \Defr\CzechDataBox\Api\tGetDBStatusInput
     */
    public function setBaTo(DateTime $baTo)
    {
        $this->baTo = $baTo->format(DateTime::ATOM);
        return $this;
    }

}
