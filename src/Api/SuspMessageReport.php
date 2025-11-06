<?php

namespace Defr\CzechDataBox\Api;

class SuspMessageReport
{

    /**
     * @var tIdDm $dmID
     */
    protected $dmID = null;

    /**
     * @var string $repName
     */
    protected $repName = null;

    /**
     * @var string $repMail
     */
    protected $repMail = null;

    /**
     * @var string $repTel
     */
    protected $repTel = null;

    /**
     * @var boolean $allowComplete
     */
    protected $allowComplete = null;

    /**
     * @var string $note
     */
    protected $note = null;

    /**
     * @param tIdDm $dmID
     * @param string $repName
     * @param string $repMail
     * @param string $repTel
     * @param boolean $allowComplete
     * @param string $note
     */
    public function __construct($dmID = null, $repName = null, $repMail = null, $repTel = null, $allowComplete = null, $note = null)
    {
        $this->dmID = $dmID;
        $this->repName = $repName;
        $this->repMail = $repMail;
        $this->repTel = $repTel;
        $this->allowComplete = $allowComplete;
        $this->note = $note;
    }

    /**
     * @return tIdDm
     */
    public function getDmID()
    {
        return $this->dmID;
    }

    /**
     * @param tIdDm $dmID
     * @return \Defr\CzechDataBox\Api\SuspMessageReport
     */
    public function setDmID($dmID)
    {
        $this->dmID = $dmID;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepName()
    {
        return $this->repName;
    }

    /**
     * @param string $repName
     * @return \Defr\CzechDataBox\Api\SuspMessageReport
     */
    public function setRepName($repName)
    {
        $this->repName = $repName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepMail()
    {
        return $this->repMail;
    }

    /**
     * @param string $repMail
     * @return \Defr\CzechDataBox\Api\SuspMessageReport
     */
    public function setRepMail($repMail)
    {
        $this->repMail = $repMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepTel()
    {
        return $this->repTel;
    }

    /**
     * @param string $repTel
     * @return \Defr\CzechDataBox\Api\SuspMessageReport
     */
    public function setRepTel($repTel)
    {
        $this->repTel = $repTel;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowComplete()
    {
        return $this->allowComplete;
    }

    /**
     * @param boolean $allowComplete
     * @return \Defr\CzechDataBox\Api\SuspMessageReport
     */
    public function setAllowComplete($allowComplete)
    {
        $this->allowComplete = $allowComplete;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return \Defr\CzechDataBox\Api\SuspMessageReport
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
}
