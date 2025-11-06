<?php

namespace Defr\CzechDataBox\Api;

class dbID
{

    /**
     * @var tIdDb $_
     */
    protected $_ = null;

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
     * @param tIdDb $_
     * @param string $guid
     * @param string $subject
     * @param string $branch
     */
    public function __construct($_ = null, $guid = null, $subject = null, $branch = null)
    {
      $this->_ = $_;
      $this->guid = $guid;
      $this->subject = $subject;
      $this->branch = $branch;
    }

    /**
     * @return tIdDb
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param tIdDb $_
     * @return \Defr\CzechDataBox\Api\dbID
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \Defr\CzechDataBox\Api\dbID
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
     * @return \Defr\CzechDataBox\Api\dbID
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
     * @return \Defr\CzechDataBox\Api\dbID
     */
    public function setBranch($branch)
    {
      $this->branch = $branch;
      return $this;
    }

}
