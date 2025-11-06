<?php

namespace Defr\CzechDataBox\Api;

class GetMessageAuthor2Response
{

    /**
     * @var dmMessageAuthor $dmMessageAuthor
     */
    protected $dmMessageAuthor = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param dmMessageAuthor $dmMessageAuthor
     * @param tStatus $dmStatus
     */
    public function __construct($dmMessageAuthor = null, $dmStatus = null)
    {
      $this->dmMessageAuthor = $dmMessageAuthor;
      $this->dmStatus = $dmStatus;
    }

    /**
     * @return dmMessageAuthor
     */
    public function getDmMessageAuthor()
    {
      return $this->dmMessageAuthor;
    }

    /**
     * @param dmMessageAuthor $dmMessageAuthor
     * @return \Defr\CzechDataBox\Api\GetMessageAuthor2Response
     */
    public function setDmMessageAuthor($dmMessageAuthor)
    {
      $this->dmMessageAuthor = $dmMessageAuthor;
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
     * @return \Defr\CzechDataBox\Api\GetMessageAuthor2Response
     */
    public function setDmStatus($dmStatus)
    {
      $this->dmStatus = $dmStatus;
      return $this;
    }

}
