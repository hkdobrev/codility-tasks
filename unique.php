<?php

function solution($arr) {
    $unique = array();
    $n = count($arr);
    
    for ($i = 0; $i < $n; $i++) {
        $value = $arr[ $i ];
        if (!isset($unique[ $value ])) {
            if (!array_key_exists($value, $unique)) {
                $unique[ $value ] = $value;
            }
        } else {
            $unique[ $value ] = null;
        }
    }

    $unique = array_filter($unique, function($item) {
        return $item !== null;
    });

    reset($unique);
    $result = current($unique);

    return $result !== false ? $result : -1;
}

function getInput()
{
}