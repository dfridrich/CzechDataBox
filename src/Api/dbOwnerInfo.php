<?php

namespace Defr\CzechDataBox\Api;

class dbOwnerInfo
{

    /**
     * @var string $formdataid
     */
    protected $formdataid = null;

    /**
     * @var string $identityDocumentNum
     */
    protected $identityDocumentNum = null;

    /**
     * @var string $identityDocumentType
     */
    protected $identityDocumentType = null;

    /**
     * @var anonymous44 $PDZ
     */
    protected $PDZ = null;

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string $branch
     */
    protected $branch = null;

    /**
     * @param string $formdataid
     * @param string $identityDocumentNum
     * @param string $identityDocumentType
     * @param anonymous44 $PDZ
     * @param string $guid
     * @param string $subject
     * @param string $branch
     */
    public function __construct($formdataid = null, $identityDocumentNum = null, $identityDocumentType = null, $PDZ = null, $guid = null, $subject = null, $branch = null)
    {
      $this->formdataid = $formdataid;
      $this->identityDocumentNum = $identityDocumentNum;
      $this->identityDocumentType = $identityDocumentType;
      $this->PDZ = $PDZ;
      $this->guid = $guid;
      $this->subject = $subject;
      $this->branch = $branch;
    }

    /**
     * @return string
     */
    public function getFormdataid()
    {
      return $this->formdataid;
    }

    /**
     * @param string $formdataid
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setFormdataid($formdataid)
    {
      $this->formdataid = $formdataid;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentityDocumentNum()
    {
      return $this->identityDocumentNum;
    }

    /**
     * @param string $identityDocumentNum
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setIdentityDocumentNum($identityDocumentNum)
    {
      $this->identityDocumentNum = $identityDocumentNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentityDocumentType()
    {
      return $this->identityDocumentType;
    }

    /**
     * @param string $identityDocumentType
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setIdentityDocumentType($identityDocumentType)
    {
      $this->identityDocumentType = $identityDocumentType;
      return $this;
    }

    /**
     * @return anonymous44
     */
    public function getPDZ()
    {
      return $this->PDZ;
    }

    /**
     * @param anonymous44 $PDZ
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setPDZ($PDZ)
    {
      $this->PDZ = $PDZ;
      return $this;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param string $guid
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getBranch()
    {
      return $this->branch;
    }

    /**
     * @param string $branch
     * @return \Defr\CzechDataBox\Api\dbOwnerInfo
     */
    public function setBranch($branch)
    {
      $this->branch = $branch;
      return $this;
    }

}
