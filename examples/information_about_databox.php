<?php

require "../vendor/autoload.php";
require "bootstrap.php";

use Defr\CzechDataBox\DataBox;

$dataBox = new DataBox();
$dataBox->loginWithUsernameAndPassword(DATABOX_LOGIN, DATABOX_PASSWORD, DATABOX_PRODUCTION);

/** @var \Defr\CzechDataBox\Api\tDbOwnerInfo $response */
$response = $dataBox->DataBoxAccess()
    ->GetOwnerInfoFromLogin(new \Defr\CzechDataBox\Api\tDummyInput(null))
    ->getDbOwnerInfo();

var_dump($response);