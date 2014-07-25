<?php

function getInput()
{
    return array(
        -7,
        1,
        5,
        2,
        -4,
        3,
        0,
    );
}

function solution(array $arr)
{
    $leftSum = 0;
    $rightSum = array_sum($arr);

    $i = 0;
    $length = count($arr);

    do {

        $leftSum += $arr[ $i ];
        $rightSum -= $arr[ $i ];

        if ($leftSum === $rightSum) {
            return $i + 1;
        }

        $i++;

    } while( $i < $length );

    return -1;
}
