<?php

namespace Defr\CzechDataBox\Api;

class tPDZRec
{
    /**
     * @var string
     */
    protected $PDZType = null;

    /**
     * @var tIdDb
     */
    protected $PDZRecip = null;

    /**
     * @var tIdDb
     */
    protected $PDZPayer = null;

    /**
     * @var \DateTime
     */
    protected $PDZExpire = null;

    /**
     * @var int
     */
    protected $PDZCnt = null;

    /**
     * @var string
     */
    protected $ODZIdent = null;

    /**
     * @param string    $PDZType
     * @param tIdDb     $PDZRecip
     * @param tIdDb     $PDZPayer
     * @param \DateTime $PDZExpire
     * @param int       $PDZCnt
     * @param string    $ODZIdent
     */
    public function __construct($PDZType = null, $PDZRecip = null, $PDZPayer = null, \DateTime $PDZExpire = null, $PDZCnt = null, $ODZIdent = null)
    {
        $this->PDZType = $PDZType;
        $this->PDZRecip = $PDZRecip;
        $this->PDZPayer = $PDZPayer;
        $this->PDZExpire = $PDZExpire ? $PDZExpire->format(\DateTime::ATOM) : null;
        $this->PDZCnt = $PDZCnt;
        $this->ODZIdent = $ODZIdent;
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
     *
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
     *
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
     *
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
            return;
        } else {
            try {
                return new \DateTime($this->PDZExpire);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PDZExpire
     *
     * @return \Defr\CzechDataBox\Api\tPDZRec
     */
    public function setPDZExpire(\DateTime $PDZExpire)
    {
        $this->PDZExpire = $PDZExpire->format(\DateTime::ATOM);

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
     *
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
     *
     * @return \Defr\CzechDataBox\Api\tPDZRec
     */
    public function setODZIdent($ODZIdent)
    {
        $this->ODZIdent = $ODZIdent;

        return $this;
    }
}
