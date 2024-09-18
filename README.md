# CzechDataBox

[![PHPUnit](https://github.com/dfridrich/CzechDataBox/actions/workflows/test.yaml/badge.svg)](https://github.com/dfridrich/CzechDataBox/actions/workflows/test.yaml)
[![Latest Stable Version](https://poser.pugx.org/dfridrich/czech-data-box/v/stable)](https://packagist.org/packages/dfridrich/czech-data-box)
[![Total Downloads](https://poser.pugx.org/dfridrich/czech-data-box/downloads)](https://packagist.org/packages/dfridrich/czech-data-box)
[![Monthly Downloads](https://poser.pugx.org/dfridrich/czech-data-box/d/monthly)](https://packagist.org/packages/dfridrich/czech-data-box)
[![License](https://poser.pugx.org/dfridrich/czech-data-box/license)](https://packagist.org/packages/dfridrich/czech-data-box)


Knihovna pro komunikaci s datovou schránkou v PHP.

![Logo datových schránek](Resources/logo.png)

## Instalace pomocí Composeru

`composer require dfridrich/czech-data-box`

## Příklady

Níže uvedené příklady používají `Defr\CzechDataBox\DataBoxSimpleApi`, které nabízí jednodušší přístup k datové schránce. Pokud chcete použít standardní přístup, můžete využít tyto web services:

```php
<?php

$dataBox->DmOperationsWebService();
$dataBox->DmInfoWebService();
$dataBox->DataBoxSearch();
$dataBox->DataBoxAccess();
$dataBox->IsdsStat();
```

### Připojení k datové schránce

```php
<?php

require "../vendor/autoload.php";

use Defr\CzechDataBox\DataBox;

$dataBox = new DataBox();
$dataBox->loginWithUsernameAndPassword("login", "heslo", true); // Pro ostrou verzi
$dataBox->loginWithUsernameAndPassword("login", "heslo", false); // Pro verzi s testovacím přístupem
$dataBox->loginWithCertificateAndPassword("certifikat.cer"); // Nebo pouzijte prihlaseni certifikatem

/** @var \Defr\CzechDataBox\DataBoxSimpleApi $simpleApi */
$simpleApi = $dataBox->getSimpleApi();
```

### Informace o datové schránce

```php
$simpleApi->getDataBoxInfo(); // vrací Defr\CzechDataBox\Api\tDbOwnerInfo
```

### Informace o přihlášeném uživateli

```php
$simpleApi->getUserInfo(); // Vrací Defr\CzechDataBox\Api\tDbUserInfo;
```

### Informace o expiraci hesla

```php
$simpleApi->getPasswordExpires(); // \DateTime|null
```

### Stažení přijatých zpráv

```php
$days = 90;
$limit = 1000;

$messages = $simpleApi->getListOfReceivedMessages($days, $limit);
foreach ($messages as $message) {
    echo "<h2>Msg# " . $message->getDmID() . "</h2>";
    // Defr\CzechDataBox\Api\tIdDm
    var_dump($message);

    echo "<h3>Signed message</h3>";
    // Defr\CzechDataBox\DataBoxMessageFile
    var_dump($simpleApi->downloadSignedReceivedMessage($message->getDmID()));

    echo "<h3>Delivery info</h3>";
    // Defr\CzechDataBox\DataBoxMessageFile
    var_dump($simpleApi->downloadDeliveryInfo($message->getDmID()));

    echo "<h3>Attachments</h3>";
    // Defr\CzechDataBox\DataBoxMessageAttachment[]
    var_dump($simpleApi->getReceivedDataMessageAttachments($message->getDmID()));
}
```

### Stažení odeslaných zpráv

```php
$messages = $simpleApi->getListOfSentMessages();
foreach ($messages as $message) {
    echo "<h2>Msg# " . $message->getDmID() . "</h2>";
    var_dump($message);

    echo "<h3>Signed message</h3>";
    var_dump($simpleApi->downloadSignedSentMessage($message->getDmID()));

    echo "<h3>Delivery info</h3>";
    var_dump($simpleApi->downloadDeliveryInfo($message->getDmID()));
}

```

### Nalezení datové schránky na základě jejího ID

```php
$simpleApi->findDataBoxById('wucb4dd');
```


### Odeslání datové zprávy včetně přílohy

Datová schránka nepřijímá všechny typy souborů, testováno na pdf, jpg, png (Většina binary typů by měla projít).
TXT soubory lze odeslat pouze, kdyz se 2x base64 encodují, výsledkem je přijatá datová zpráva s base64 encodovaným contentem uvnitř txt souboru

```php
$files = [
    '/path/to/a/file.pdf',
];
$message = $simpleApi->createBasicDataMessage('wucb4dd', 'Test', $files);
$sentMessage = $simpleApi->sendDataMessage($message);
if ($sentMessage->getDmStatus()->getDmStatusCode() !== "0000") {
    // Handle errors
}
```

### Odeslání VODz datové zprávy včetně přílohy

Příklad odeslání VoDZ. Nejprve se provádí nahrání přílohy metodou UploadAttachment, v response jsou vrácené HASH řetězce které se následně odesílají při sestavení VoDZ zprávy.

```php

// nahrani souboru VoDZ
$uploadAttachment = $this->getUploadAttachment();
$responseUploadAttachment = $vodzClient->UploadAttachment($uploadAttachment);

$envelope = $this->getBigEnvelope();
$dmExtFile = $this->getDmExtFile($responseUploadAttachment);

// nahrani běžné přílohy
$attachments2 = $this->getDmFile();

$dmFiles = new dmFiles();
$dmFiles->setDmExtFile($dmExtFile);
$dmFiles->setDmFile($attachments2[0]);

// vytvoření VoDZ zprávy
$bigMessage = new tBigMessageInput();
$bigMessage->setDmEnvelope($envelope);
$bigMessage->setDmFiles($dmFiles);

// odeslání zprávy
$sentMessage = $vodzClient->CreateBigMessage($bigMessage);
if ($sentMessage->getDmStatus()->getDmStatusCode() !== "0000") {
    // Handle errors
}
```

## Závěrem

Všechny příklady nejdete ve složce examples. Pro připojení k datové schránce budete potřebovat login a heslo nebo testovací přístup, který lze získat na základě vyplnění [tohoto formuláře](https://www.datoveschranky.info/documents/1744842/1746073/zadost_zrizeni_testovaci_ds.zfo/4b75d5bf-0272-4305-9cef-8ec8f019e9d3).

Jakmile přístupové údaje budete mít, vytvořte config.ini (z config.ini.dist).

## Odkazy

- Testovací prostředí datových schránek - https://www.czebox.cz/
- Ostré prostředí datových schránek - https://www.mojedatovaschranka.cz/

## Contributing

Budu rád za každý návrh na vylepšení :-)

## @TODO

- Jednoduché hledání na základě jména, příjmení nebo názvu firmy nebo úřadu
