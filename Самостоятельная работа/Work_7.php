<?php

$inputString = "Hi banana world";

function custom_strlen($string) {
    $length = 0;

    while (isset($string[$length])) {
        $length++;
    }

    return $length;
}

$length = custom_strlen($inputString);
print("Длинна строки: {$length}");