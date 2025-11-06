<?php


 function autoload_04b45f9fa0ba0664e7523f24a0507ef3($class)
{
    $classes = array(
        'Defr\CzechDataBox\Api\IsdsStat' => __DIR__ .'/IsdsStat.php',
        'Defr\CzechDataBox\Api\tNumOfMessagesInput' => __DIR__ .'/tNumOfMessagesInput.php',
        'Defr\CzechDataBox\Api\tNumOfMessagesOutput' => __DIR__ .'/tNumOfMessagesOutput.php',
        'Defr\CzechDataBox\Api\tStatReqStatus' => __DIR__ .'/tStatReqStatus.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_04b45f9fa0ba0664e7523f24a0507ef3');

// Do nothing. The rest is just leftovers from the code generation.
{
}
