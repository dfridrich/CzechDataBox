<?php

namespace Defr\CzechDataBox\Api;

class tFile
{

    /**
     * @var base64Binary $dmEncodedContent
     */
    protected $dmEncodedContent = null;

    /**
     * @var dmXMLContent $dmXMLContent
     */
    protected $dmXMLContent = null;

    /**
     * @param base64Binary $dmEncodedContent
     * @param dmXMLContent $dmXMLContent
     */
    public function __construct($dmEncodedContent = null, $dmXMLContent = null)
    {
      $this->dmEncodedContent = $dmEncodedContent;
      $this->dmXMLContent = $dmXMLContent;
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
