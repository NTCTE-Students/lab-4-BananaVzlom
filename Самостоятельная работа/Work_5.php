<?php

$someString = 'Hi banana world';

function upRegister(&$string) {
    return strtoupper($string);
}

print(upRegister($someString));