<?php

namespace Defr\CzechDataBox\Api;

use DateTime;
use Exception;

class tPDZRec
{

    protected tIdDb $PDZRecip = null;

    protected tIdDb $PDZPayer = null;

    protected DateTime $PDZExpire = null;

    /**
     * @param string $PDZType
     * @param tIdDb $PDZRecip
     * @param tIdDb $PDZPayer
     * @param int $PDZCnt
     * @param string $ODZIdent
     */
    public function __construct(protected $PDZType = null, $PDZRecip = null, $PDZPayer = null, DateTime $PDZExpire = null, protected $PDZCnt = null, protected $ODZIdent = null)
    {
        $this->PDZRecip = $PDZRecip;
        $this->PDZPayer = $PDZPayer;
        $this->PDZExpire = $PDZExpire !== null ? $PDZExpire->format(DateTime::ATOM) : null;
    }


    /**
     * @return string
     */
    public function getPDZType()
    {
        return $this->PDZType;
    }


    /**
     * @param string $PDZType
     * @return \Defr\CzechDataBox\Api\tPDZRec
     */
    public function setPDZType($PDZType)
    {
        $this->PDZType = $PDZType;
        return $this;
    }


    /**
     * @return tIdDb
     */
    public function getPDZRecip()
    {
        return $this->PDZRecip;
    }


    /**
     * @param tIdDb $PDZRecip
     * @return \Defr\CzechDataBox\Api\tPDZRec
     */
    public function setPDZRecip($PDZRecip)
    {
        $this->PDZRecip = $PDZRecip;
        return $this;
    }


    /**
     * @return tIdDb
     */
    public function getPDZPayer()
    {
        return $this->PDZPayer;
    }


    /**
     * @param tIdDb $PDZPayer
     * @return \Defr\CzechDataBox\Api\tPDZRec
     */
    public function setPDZPayer($PDZPayer)
    {
        $this->PDZPayer = $PDZPayer;
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getPDZExpire()
    {
        if ($this->PDZExpire == null) {
            return null;
        } else {
            try {
                return new DateTime($this->PDZExpire);
            } catch (Exception) {
                return false;
            }
        }
    }


    /**
     * @return \Defr\CzechDataBox\Api\tPDZRec
     */
    public function setPDZExpire(DateTime $PDZExpire)
    {
        $this->PDZExpire = $PDZExpire->format(DateTime::ATOM);
        return $this;
    }


    /**
     * @return int
     */
    public function getPDZCnt()
    {
        return $this->PDZCnt;
    }


    /**
     * @param int $PDZCnt
     * @return \Defr\CzechDataBox\Api\tPDZRec
     */
    public function setPDZCnt($PDZCnt)
    {
        $this->PDZCnt = $PDZCnt;
        return $this;
    }


    /**
     * @return string
     */
    public function getODZIdent()
    {
        return $this->ODZIdent;
    }


    /**
     * @param string $ODZIdent
     * @return \Defr\CzechDataBox\Api\tPDZRec
     */
    public function setODZIdent($ODZIdent)
    {
        $this->ODZIdent = $ODZIdent;
        return $this;
    }

}
