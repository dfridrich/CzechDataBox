<?php

namespace Defr\CzechDataBox;

/**
 * Class DataBoxMessageAttachment
 * @package Defr\CzechDataBox
 */
class DataBoxMessageAttachment
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $filename;

    /**
     * @param $location
     */
    public function __construct($location)
    {
        $this->location = $location;
        $this->filename = pathinfo($location)['basename'];
    }

    /**
     * @return string
     */
    public function get()
    {
        return file_get_contents($this->location);
    }

    /**
     * @param $content
     *
     * @throws DataBoxException
     */
    public function save($content)
    {
        if (empty($content)) {
            throw new DataBoxException('Content of file is empty.');
        }
        if (false === $this->getIsExist()) {
            @mkdir(pathinfo($this->location)['dirname'], 0777, true);
            file_put_contents($this->location, $content);
        } else {
            throw new DataBoxException('Data message attachment already exists.');
        }
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getIsExist()
    {
        return file_exists($this->location);
    }
}
