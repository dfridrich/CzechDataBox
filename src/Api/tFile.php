<?php

namespace Defr\CzechDataBox\Api;

class tFile
{

    protected base64Binary $dmEncodedContent = null;

    /**
     * @param base64Binary $dmEncodedContent
     * @param dmXMLContent $dmXMLContent
     */
    public function __construct($dmEncodedContent = null, protected $dmXMLContent = null)
    {
        $this->dmEncodedContent = $dmEncodedContent;
    }


    /**
     * @return base64Binary
     */
    public function getDmEncodedContent()
    {
        return $this->dmEncodedContent;
    }


    /**
     * @param base64Binary $dmEncodedContent
     * @return \Defr\CzechDataBox\Api\tFile
     */
    public function setDmEncodedContent($dmEncodedContent)
    {
        $this->dmEncodedContent = $dmEncodedContent;
        return $this;
    }


    /**
     * @return dmXMLContent
     */
    public function getDmXMLContent()
    {
        return $this->dmXMLContent;
    }


    /**
     * @param dmXMLContent $dmXMLContent
     * @return \Defr\CzechDataBox\Api\tFile
     */
    public function setDmXMLContent($dmXMLContent)
    {
        $this->dmXMLContent = $dmXMLContent;
        return $this;
    }

}
