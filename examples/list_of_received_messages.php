<?php

require "../vendor/autoload.php";
require "bootstrap.php";

use Defr\CzechDataBox\DataBox;

$dataBox = new DataBox();
$dataBox->loginWithUsernameAndPassword(DATABOX_LOGIN, DATABOX_PASSWORD, DATABOX_PRODUCTION);

$list = new \Defr\CzechDataBox\Api\tListOfFReceivedInput();

/** @var \Defr\CzechDataBox\Api\tRecordsArray $response */
$messages = $dataBox->DmInfoWebService()
    ->GetListOfReceivedMessages($list)
    ->getDmRecords()
    ->getDmRecord();

var_dump($messages);