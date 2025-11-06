<?php

namespace Defr\CzechDataBox\Api;

class tPickUpAsyncOutput
{

    /**
     * @var string $asyncReqType
     */
    protected $asyncReqType = null;

    /**
     * @var base64Binary $asyncResponse
     */
    protected $asyncResponse = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param string $asyncReqType
     * @param base64Binary $asyncResponse
     * @param tStatus $dmStatus
     */
    public function __construct($asyncReqType = null, $asyncResponse = null, $dmStatus = null)
    {
      $this->asyncReqType = $asyncReqType;
      $this->asyncResponse = $asyncResponse;
      $this->dmStatus = $dmStatus;
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
     * @return \Defr\CzechDataBox\Api\tPickUpAsyncOutput
     */
    public function setAsyncReqType($asyncReqType)
    {
      $this->asyncReqType = $asyncReqType;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getAsyncResponse()
    {
      return $this->asyncResponse;
    }

    /**
     * @param base64Binary $asyncResponse
     * @return \Defr\CzechDataBox\Api\tPickUpAsyncOutput
     */
    public function setAsyncResponse($asyncResponse)
    {
      $this->asyncResponse = $asyncResponse;
      return $this;
    }

    /**
     * @return tStatus
     */
    public function getDmStatus()
    {
      return $this->dmStatus;
    }

    /**
     * @param tStatus $dmStatus
     * @return \Defr\CzechDataBox\Api\tPickUpAsyncOutput
     */
    public function setDmStatus($dmStatus)
    {
      $this->dmStatus = $dmStatus;
      return $this;
    }

}
