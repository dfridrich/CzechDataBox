<?php

namespace Defr\CzechDataBox\Api;

class tCiRecord
{

    /**
     * @var \DateTime $ciEventTime
     */
    protected $ciEventTime = null;

    /**
     * @var int $ciEventType
     */
    protected $ciEventType = null;

    /**
     * @var int $ciCreditChange
     */
    protected $ciCreditChange = null;

    /**
     * @var int $ciCreditAfter
     */
    protected $ciCreditAfter = null;

    /**
     * @var string $ciTransID
     */
    protected $ciTransID = null;

    /**
     * @var tIdDb $ciRecipientID
     */
    protected $ciRecipientID = null;

    /**
     * @var string $ciPDZID
     */
    protected $ciPDZID = null;

    /**
     * @var int $ciNewCapacity
     */
    protected $ciNewCapacity = null;

    /**
     * @var date $ciNewFrom
     */
    protected $ciNewFrom = null;

    /**
     * @var date $ciNewTo
     */
    protected $ciNewTo = null;

    /**
     * @var int $ciOldCapacity
     */
    protected $ciOldCapacity = null;

    /**
     * @var date $ciOldFrom
     */
    protected $ciOldFrom = null;

    /**
     * @var date $ciOldTo
     */
    protected $ciOldTo = null;

    /**
     * @var string $ciDoneBy
     */
    protected $ciDoneBy = null;

    /**
     * @param \DateTime $ciEventTime
     * @param int $ciEventType
     * @param int $ciCreditChange
     * @param int $ciCreditAfter
     * @param string $ciTransID
     * @param tIdDb $ciRecipientID
     * @param string $ciPDZID
     * @param int $ciNewCapacity
     * @param date $ciNewFrom
     * @param date $ciNewTo
     * @param int $ciOldCapacity
     * @param date $ciOldFrom
     * @param date $ciOldTo
     * @param string $ciDoneBy
     */
    public function __construct(\DateTime $ciEventTime = null, $ciEventType = null, $ciCreditChange = null, $ciCreditAfter = null, $ciTransID = null, $ciRecipientID = null, $ciPDZID = null, $ciNewCapacity = null, $ciNewFrom = null, $ciNewTo = null, $ciOldCapacity = null, $ciOldFrom = null, $ciOldTo = null, $ciDoneBy = null)
    {
      $this->ciEventTime = $ciEventTime ? $ciEventTime->format(\DateTime::ATOM) : null;
      $this->ciEventType = $ciEventType;
      $this->ciCreditChange = $ciCreditChange;
      $this->ciCreditAfter = $ciCreditAfter;
      $this->ciTransID = $ciTransID;
      $this->ciRecipientID = $ciRecipientID;
      $this->ciPDZID = $ciPDZID;
      $this->ciNewCapacity = $ciNewCapacity;
      $this->ciNewFrom = $ciNewFrom;
      $this->ciNewTo = $ciNewTo;
      $this->ciOldCapacity = $ciOldCapacity;
      $this->ciOldFrom = $ciOldFrom;
      $this->ciOldTo = $ciOldTo;
      $this->ciDoneBy = $ciDoneBy;
    }

    /**
     * @return \DateTime
     */
    public function getCiEventTime()
    {
      if ($this->ciEventTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ciEventTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ciEventTime
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiEventTime(\DateTime $ciEventTime)
    {
      $this->ciEventTime = $ciEventTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getCiEventType()
    {
      return $this->ciEventType;
    }

    /**
     * @param int $ciEventType
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiEventType($ciEventType)
    {
      $this->ciEventType = $ciEventType;
      return $this;
    }

    /**
     * @return int
     */
    public function getCiCreditChange()
    {
      return $this->ciCreditChange;
    }

    /**
     * @param int $ciCreditChange
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiCreditChange($ciCreditChange)
    {
      $this->ciCreditChange = $ciCreditChange;
      return $this;
    }

    /**
     * @return int
     */
    public function getCiCreditAfter()
    {
      return $this->ciCreditAfter;
    }

    /**
     * @param int $ciCreditAfter
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiCreditAfter($ciCreditAfter)
    {
      $this->ciCreditAfter = $ciCreditAfter;
      return $this;
    }

    /**
     * @return string
     */
    public function getCiTransID()
    {
      return $this->ciTransID;
    }

    /**
     * @param string $ciTransID
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiTransID($ciTransID)
    {
      $this->ciTransID = $ciTransID;
      return $this;
    }

    /**
     * @return tIdDb
     */
    public function getCiRecipientID()
    {
      return $this->ciRecipientID;
    }

    /**
     * @param tIdDb $ciRecipientID
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiRecipientID($ciRecipientID)
    {
      $this->ciRecipientID = $ciRecipientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCiPDZID()
    {
      return $this->ciPDZID;
    }

    /**
     * @param string $ciPDZID
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiPDZID($ciPDZID)
    {
      $this->ciPDZID = $ciPDZID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCiNewCapacity()
    {
      return $this->ciNewCapacity;
    }

    /**
     * @param int $ciNewCapacity
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiNewCapacity($ciNewCapacity)
    {
      $this->ciNewCapacity = $ciNewCapacity;
      return $this;
    }

    /**
     * @return date
     */
    public function getCiNewFrom()
    {
      return $this->ciNewFrom;
    }

    /**
     * @param date $ciNewFrom
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiNewFrom($ciNewFrom)
    {
      $this->ciNewFrom = $ciNewFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getCiNewTo()
    {
      return $this->ciNewTo;
    }

    /**
     * @param date $ciNewTo
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiNewTo($ciNewTo)
    {
      $this->ciNewTo = $ciNewTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getCiOldCapacity()
    {
      return $this->ciOldCapacity;
    }

    /**
     * @param int $ciOldCapacity
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiOldCapacity($ciOldCapacity)
    {
      $this->ciOldCapacity = $ciOldCapacity;
      return $this;
    }

    /**
     * @return date
     */
    public function getCiOldFrom()
    {
      return $this->ciOldFrom;
    }

    /**
     * @param date $ciOldFrom
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiOldFrom($ciOldFrom)
    {
      $this->ciOldFrom = $ciOldFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getCiOldTo()
    {
      return $this->ciOldTo;
    }

    /**
     * @param date $ciOldTo
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiOldTo($ciOldTo)
    {
      $this->ciOldTo = $ciOldTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCiDoneBy()
    {
      return $this->ciDoneBy;
    }

    /**
     * @param string $ciDoneBy
     * @return \Defr\CzechDataBox\Api\tCiRecord
     */
    public function setCiDoneBy($ciDoneBy)
    {
      $this->ciDoneBy = $ciDoneBy;
      return $this;
    }

}
