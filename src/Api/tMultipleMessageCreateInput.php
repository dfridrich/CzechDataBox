<?php

namespace Defr\CzechDataBox\Api;

class tMultipleMessageCreateInput
{

    /**
     * @var tMultipleMessageRecipients $dmRecipients
     */
    protected $dmRecipients = null;

    /**
     * @var dmEnvelope $dmEnvelope
     */
    protected $dmEnvelope = null;

    /**
     * @var tFilesArray $dmFiles
     */
    protected $dmFiles = null;

    /**
     * @param tMultipleMessageRecipients $dmRecipients
     * @param dmEnvelope $dmEnvelope
     * @param tFilesArray $dmFiles
     */
    public function __construct($dmRecipients = null, $dmEnvelope = null, $dmFiles = null)
    {
        $this->dmRecipients = $dmRecipients;
        $this->dmEnvelope = $dmEnvelope;
        $this->dmFiles = $dmFiles;
    }


    /**
     * @return tMultipleMessageRecipients
     */
    public function getDmRecipients()
    {
        return $this->dmRecipients;
    }


    /**
     * @param tMultipleMessageRecipients $dmRecipients
     * @return \Defr\CzechDataBox\Api\tMultipleMessageCreateInput
     */
    public function setDmRecipients($dmRecipients)
    {
        $this->dmRecipients = $dmRecipients;
        return $this;
    }


    /**
     * @return dmEnvelope
     */
    public function getDmEnvelope()
    {
        return $this->dmEnvelope;
    }


    /**
     * @param dmEnvelope $dmEnvelope
     * @return \Defr\CzechDataBox\Api\tMultipleMessageCreateInput
     */
    public function setDmEnvelope($dmEnvelope)
    {
        $this->dmEnvelope = $dmEnvelope;
        return $this;
    }


    /**
     * @return tFilesArray
     */
    public function getDmFiles()
    {
        return $this->dmFiles;
    }


    /**
     * @param tFilesArray $dmFiles
     * @return \Defr\CzechDataBox\Api\tMultipleMessageCreateInput
     */
    public function setDmFiles($dmFiles)
    {
        $this->dmFiles = $dmFiles;
        return $this;
    }

}
