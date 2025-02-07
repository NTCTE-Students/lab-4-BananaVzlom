<?php

$banan = 'Я банан';

function numOfWords($string) {
    return count($convArray = explode(" ", $string));
}

print(numOfWords($banan));