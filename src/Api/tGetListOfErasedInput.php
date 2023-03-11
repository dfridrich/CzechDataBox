<?php

namespace Defr\CzechDataBox\Api;

class tGetListOfErasedInput
{

    /**
     * @var date $dmFromDate
     */
    protected $dmFromDate = null;

    /**
     * @var date $dmToDate
     */
    protected $dmToDate = null;

    /**
     * @var int $dmYear
     */
    protected $dmYear = null;

    /**
     * @var int $dmMonth
     */
    protected $dmMonth = null;

    /**
     * @var dmMessageType $dmMessageType
     */
    protected $dmMessageType = null;

    /**
     * @var dmOutFormat $dmOutFormat
     */
    protected $dmOutFormat = null;

    /**
     * @param date $dmFromDate
     * @param date $dmToDate
     * @param int $dmYear
     * @param int $dmMonth
     * @param dmMessageType $dmMessageType
     * @param dmOutFormat $dmOutFormat
     */
    public function __construct($dmFromDate = null, $dmToDate = null, $dmYear = null, $dmMonth = null, $dmMessageType = null, $dmOutFormat = null)
    {
        $this->dmFromDate = $dmFromDate;
        $this->dmToDate = $dmToDate;
        $this->dmYear = $dmYear;
        $this->dmMonth = $dmMonth;
        $this->dmMessageType = $dmMessageType;
        $this->dmOutFormat = $dmOutFormat;
    }


    /**
     * @return date
     */
    public function getDmFromDate()
    {
        return $this->dmFromDate;
    }


    /**
     * @param date $dmFromDate
     * @return \Defr\CzechDataBox\Api\tGetListOfErasedInput
     */
    public function setDmFromDate($dmFromDate)
    {
        $this->dmFromDate = $dmFromDate;
        return $this;
    }


    /**
     * @return date
     */
    public function getDmToDate()
    {
        return $this->dmToDate;
    }


    /**
     * @param date $dmToDate
     * @return \Defr\CzechDataBox\Api\tGetListOfErasedInput
     */
    public function setDmToDate($dmToDate)
    {
        $this->dmToDate = $dmToDate;
        return $this;
    }


    /**
     * @return int
     */
    public function getDmYear()
    {
        return $this->dmYear;
    }


    /**
     * @param int $dmYear
     * @return \Defr\CzechDataBox\Api\tGetListOfErasedInput
     */
    public function setDmYear($dmYear)
    {
        $this->dmYear = $dmYear;
        return $this;
    }


    /**
     * @return int
     */
    public function getDmMonth()
    {
        return $this->dmMonth;
    }


    /**
     * @param int $dmMonth
     * @return \Defr\CzechDataBox\Api\tGetListOfErasedInput
     */
    public function setDmMonth($dmMonth)
    {
        $this->dmMonth = $dmMonth;
        return $this;
    }


    /**
     * @return dmMessageType
     */
    public function getDmMessageType()
    {
        return $this->dmMessageType;
    }


    /**
     * @param dmMessageType $dmMessageType
     * @return \Defr\CzechDataBox\Api\tGetListOfErasedInput
     */
    public function setDmMessageType($dmMessageType)
    {
        $this->dmMessageType = $dmMessageType;
        return $this;
    }


    /**
     * @return dmOutFormat
     */
    public function getDmOutFormat()
    {
        return $this->dmOutFormat;
    }


    /**
     * @param dmOutFormat $dmOutFormat
     * @return \Defr\CzechDataBox\Api\tGetListOfErasedInput
     */
    public function setDmOutFormat($dmOutFormat)
    {
        $this->dmOutFormat = $dmOutFormat;
        return $this;
    }

}
