<?php

function getInput()
{
    return array(
        3,
        1,
        2,
        4,
        3,
    );
}

function solution($arr) {
    $leftSum = $arr[0];
    $rightSum = array_sum($arr) - $leftSum;
    
    $i = 1;
    $minDifference = 100000000;

    while ($i < count($arr)) {
        $difference = abs($leftSum - $rightSum);
        if ($difference < $minDifference) {
            $minDifference = $difference;
        }
        
        $leftSum += $arr[$i];
        $rightSum -= $arr[$i];
        
        $i++;
    }
}
