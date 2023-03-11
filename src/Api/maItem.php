<?php

namespace Defr\CzechDataBox\Api;

class maItem
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $key
     * @param string $value
     */
    public function __construct($key = null, $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }


    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }


    /**
     * @param string $key
     * @return \Defr\CzechDataBox\Api\maItem
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }


    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * @param string $value
     * @return \Defr\CzechDataBox\Api\maItem
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}
