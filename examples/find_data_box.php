<?php

require "../vendor/autoload.php";
require "bootstrap.php";

use Defr\CzechDataBox\DataBox;

$dataBox = new DataBox();
$dataBox->loginWithUsernameAndPassword(DATABOX_LOGIN, DATABOX_PASSWORD, DATABOX_PRODUCTION);

$owner = new \Defr\CzechDataBox\Api\tDbOwnerInfo();

$owner->setPnFirstName('Dennis')
    ->setPnLastName('Fridrich')
    ->setDbType(\Defr\CzechDataBox\Api\tDbType::FO);

/** @var \Defr\CzechDataBox\Api\tDbOwnersArray $response */
$response = $dataBox->DataBoxSearch()
    ->FindDataBox(new \Defr\CzechDataBox\Api\tFindDBInput($owner))
    ->getDbResults();

var_dump($response);