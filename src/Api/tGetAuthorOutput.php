<?php

namespace Defr\CzechDataBox\Api;

class tGetAuthorOutput
{

    /**
     * @var string $userType
     */
    protected $userType = null;

    /**
     * @var string $authorName
     */
    protected $authorName = null;

    /**
     * @var tStatus $dmStatus
     */
    protected $dmStatus = null;

    /**
     * @param string $userType
     * @param string $authorName
     * @param tStatus $dmStatus
     */
    public function __construct($userType = null, $authorName = null, $dmStatus = null)
    {
        $this->userType = $userType;
        $this->authorName = $authorName;
        $this->dmStatus = $dmStatus;
    }


    /**
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }


    /**
     * @param string $userType
     * @return \Defr\CzechDataBox\Api\tGetAuthorOutput
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }


    /**
     * @return string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }


    /**
     * @param string $authorName
     * @return \Defr\CzechDataBox\Api\tGetAuthorOutput
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
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
     * @return \Defr\CzechDataBox\Api\tGetAuthorOutput
     */
    public function setDmStatus($dmStatus)
    {
        $this->dmStatus = $dmStatus;
        return $this;
    }

}
