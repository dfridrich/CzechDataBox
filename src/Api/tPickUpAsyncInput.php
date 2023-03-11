<?php

namespace Defr\CzechDataBox\Api;

class tPickUpAsyncInput
{

    /**
     * @var string $asyncID
     */
    protected $asyncID = null;

    /**
     * @var string $asyncReqType
     */
    protected $asyncReqType = null;

    /**
     * @param string $asyncID
     * @param string $asyncReqType
     */
    public function __construct($asyncID = null, $asyncReqType = null)
    {
        $this->asyncID = $asyncID;
        $this->asyncReqType = $asyncReqType;
    }


    /**
     * @return string
     */
    public function getAsyncID()
    {
        return $this->asyncID;
    }


    /**
     * @param string $asyncID
     * @return \Defr\CzechDataBox\Api\tPickUpAsyncInput
     */
    public function setAsyncID($asyncID)
    {
        $this->asyncID = $asyncID;
        return $this;
    }


    /**
     * @return string
     */
    public function getAsyncReqType()
    {
        return $this->asyncReqType;
    }


    /**
     * @param string $asyncReqType
     * @return \Defr\CzechDataBox\Api\tPickUpAsyncInput
     */
    public function setAsyncReqType($asyncReqType)
    {
        $this->asyncReqType = $asyncReqType;
        return $this;
    }

}
