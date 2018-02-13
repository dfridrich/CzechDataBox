# CzechDataBox

[![Build Status](https://travis-ci.org/dfridrich/CzechDataBox.svg)](https://travis-ci.org/dfridrich/CzechDataBox)
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

## Závěrem

Všechny příklady nejdete ve složce examples. Pro připojení k datové schránce budete potřebovat login a heslo nebo testovací přístup, který lze získat na základě vyplnění [tohoto formuláře](https://www.datoveschranky.info/documents/1744842/1746073/zadost_zrizeni_testovaci_ds.zfo/4b75d5bf-0272-4305-9cef-8ec8f019e9d3).

Jakmile přístupové údaje budete mít, vytvořte config.ini (z config.ini.dist).

## Odkazy

- Žádost o testovací datovou schránku - https://www.datoveschranky.info/documents/1744842/1746073/zadost_zrizeni_testovaci_ds.zfo/4b75d5bf-0272-4305-9cef-8ec8f019e9d3
- Testovací prostředí datových schránek - https://www.czebox.cz/
- Ostré prostředí datových schránek - https://www.mojedatovaschranka.cz/
- 602 XML Filler (pro formát ZFO) - http://www.602.cz/602xml_filler/download

## Contributing

Budu rád za každý návrh na vylepšení :-)

## @TODO

- Odeslání datové zprávy
- Jednoduché hledání na základě jména, příjmení nebo názvu firmy nebo úřadu