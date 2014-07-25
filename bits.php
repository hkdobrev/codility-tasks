<?php

function solution($n) {
    $s = decbin($n);
    $q = strlen($s);
    $maxP = floor($q / 2);
    $maxP = $maxP < 1 ? 1 : $maxP;
    
    for ($p = 0; $p <= $maxP; $p++) {
        
        for ($k = 0; $k < $q; $k++) {
            $t = $n & (1 << $p);
            var_dump($t);
        }
    }
}

function getInput()
{
    return 955;
}