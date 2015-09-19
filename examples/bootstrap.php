<?php

$config = parse_ini_file(__DIR__ . "/../config.ini");
define('DATABOX_LOGIN', $config['login']);
define('DATABOX_PASSWORD', $config['password']);
define('DATABOX_PRODUCTION', (bool)$config['production']);