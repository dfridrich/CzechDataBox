<?php


namespace Defr\CzechDataBox\ApiExtensions;

class dmFile extends \Defr\CzechDataBox\Api\dmFile
{
    /**
     * @var string
     */
    protected $dmEncodedContent = null;

    /**
     * @return string
     */
    public function getDmEncodedContent()
    {
        return $this->dmEncodedContent;
    }


    /**
     * @param string $dmEncodedContent
     *
     * @return \Defr\CzechDataBox\ApiExtensions\dmFile
     */
    public function setDmEncodedContent($dmEncodedContent)
    {
        $this->dmEncodedContent = $dmEncodedContent;

        return $this;
    }

}
