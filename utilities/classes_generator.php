<?php

require "../vendor/autoload.php";

use Defr\CzechDataBox\DataBoxHelper;
use Wsdl2PhpGenerator\Generator;

$generator = new Generator();
$classesLocation = __DIR__ . '/../src/Api/';

dd(DataBoxHelper::getServiceWSDLList());

if (count(@scandir($classesLocation)) > 2) {
    throw new \Exception('Classes are already generated.');
}

foreach (DataBoxHelper::getServiceWSDLList() as $wsdl)
    $generator->generate(
        new \Wsdl2PhpGenerator\Config(array(
            'inputFile'                      => $wsdl,
            'outputDir'                      => $classesLocation,
            'namespaceName'                  => 'Defr\CzechDataBox\Api',
            'constructorParamsDefaultToNull' => true
        ))
    );
