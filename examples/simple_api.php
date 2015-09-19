<?php

require "../vendor/autoload.php";
require "bootstrap.php";

use Defr\CzechDataBox\DataBox;

$dataDir = __DIR__ . "/data";

$dataBox = new DataBox();
$dataBox->loginWithUsernameAndPassword(DATABOX_LOGIN, DATABOX_PASSWORD, DATABOX_PRODUCTION);

$simpleApi = $dataBox->getSimpleApi();

echo "<h1>Information about data box</h1>";
var_dump($simpleApi->getDataBoxInfo());
echo "<hr>";

echo "<h1>Get password expires date</h1>";
var_dump($simpleApi->getPasswordExpires());
echo "<hr>";

echo "<h1>Information about logged in user</h1>";
var_dump($simpleApi->getUserInfo());
echo "<hr>";

echo "<h1>Get list of received messages</h1>";
$messages = $simpleApi->getListOfReceivedMessages();
foreach ($messages as $message) {
    echo "<h2>Msg# " . $message->getDmID() . "</h2>";
    var_dump($message);
    echo "<h3>Signed message</h3>";
    var_dump($simpleApi->downloadSignedReceivedMessage($message->getDmID()));
    echo "<h3>Delivery info</h3>";
    var_dump($simpleApi->downloadDeliveryInfo($message->getDmID()));
    echo "<h3>Attachments</h3>";
    var_dump($simpleApi->getReceivedDataMessageAttachments($message->getDmID()));
}
echo "<hr>";

echo "<h1>Get list of sent messages</h1>";
$messages = $simpleApi->getListOfSentMessages();
foreach ($messages as $message) {
    echo "<h2>Msg# " . $message->getDmID() . "</h2>";
    var_dump($message);
    echo "<h3>Signed message</h3>";
    var_dump($simpleApi->downloadSignedSentMessage($message->getDmID()));
    echo "<h3>Delivery info</h3>";
    var_dump($simpleApi->downloadDeliveryInfo($message->getDmID()));
}
echo "<hr>";

echo "<h1>Find data box by ID</h1>";
var_dump($simpleApi->findDataBoxById('wucb4dd'));
echo "<hr>";

echo "<h1>Stats</h1>";
var_dump($simpleApi->getStats());
echo "<hr>";