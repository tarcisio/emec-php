#!/usr/bin/env php
<?php

require_once('./utils.php');

if ( $argc < 2 || in_array($argv[1], array('--help', '-help', '-h', '-?'))) {
    help();
    exit();
}

$pagina = curl($argv[1]);
fwrite(STDOUT, $pagina . PHP_EOL);

function help()
{
    //TODO
}