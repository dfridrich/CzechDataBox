<?php

use Defr\CzechDataBox\Api\IsdsStat;
use Defr\CzechDataBox\Api\tNumOfMessagesInput;
use Defr\CzechDataBox\Api\tNumOfMessagesOutput;
use Defr\CzechDataBox\Api\tStatReqStatus;

function autoload_04b45f9fa0ba0664e7523f24a0507ef3($class)
{
    $classes = [
       IsdsStat::class => __DIR__.'/IsdsStat.php',
       tNumOfMessagesInput::class => __DIR__.'/tNumOfMessagesInput.php',
       tNumOfMessagesOutput::class => __DIR__.'/tNumOfMessagesOutput.php',
       tStatReqStatus::class => __DIR__.'/tStatReqStatus.php',
    ];
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}


spl_autoload_register('autoload_04b45f9fa0ba0664e7523f24a0507ef3');

// Do nothing. The rest is just leftovers from the code generation.
{
}
