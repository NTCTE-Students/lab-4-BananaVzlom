<?php

$bigNum = '12264';

function digitalSum($string) {
    $arr = str_split($string);
    $result = 0;
    foreach ($arr as $value) {
        $result += intval($value);
    }
    return $result;
}

print(digitalSum($bigNum));