<?php

error_reporting(E_ALL ^ E_STRICT);
ini_set('display_errors', 1);

require_once $argv[1].'.php';

function main()
{
    $input = getInput();
    $result = solution($input);
    showOutput($result);
}

function showOutput($output)
{
    echo $output."\n";
    exit(0);
}

main();