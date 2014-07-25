<?php

function solution($moves) {
    $result = 0;
    $n = count($moves);
    $path = array();

    // Initial position
    $x = 0;
    $y = 0;

    // Initial direction
    $direction = 'north';
    list($directionX, $directionY) = getDirection($direction);
    
    for ($i = 0; $i < $n; $i++) {
        $steps = $moves[ $i ];
        $x += $directionX * $steps;
        $y += $directionY * $steps;
        
        $direction = getNextDirection($direction);
        list($directionX, $directionY) = getDirection($direction);
    }

    return $result;
}

function getNextDirection($currentDirectionName) {
    switch ($currentDirectionName)
    {
        case 'north':
            return 'east';
        break;
        case 'east':
            return 'south';
        break;
        case 'south':
            return 'west';
        break;
        case 'west':
            return 'north';
        break;
    }
}

function getDirection($directionName) {
    switch ($directionName)
    {
        case 'north':
            return array(0, 1);
        break;
        case 'east':
            return array(1, 0);
        break;
        case 'south':
            return array(0, -1);
        break;
        case 'west':
            return array(-1, 0);
        break;
    }
}

function getInput()
{
    return [1, 3, 2, 5, 4, 4, 6, 3, 2];
}