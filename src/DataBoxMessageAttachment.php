<?php

namespace Defr\CzechDataBox;

use function file_exists;
use function file_get_contents;
use function file_put_contents;
use function mkdir;
use function pathinfo;

/**
 * Class DataBoxMessageAttachment
 */
class DataBoxMessageAttachment
{
    public $path;

    private string $filename;

    /**
     * @param $location
     */
    public function __construct(private $location)
    {
        $this->filename = pathinfo($location)['basename'];
    }


    /**
     * @return string
     */
    public function get(): string|bool
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

        if (!$this->getIsExist()) {
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
    public function getIsExist(): bool
    {
        return file_exists($this->location);
    }
}
