<?php
// call self function in function
function hallo (int $value)
{
    echo "hallo $value" . PHP_EOL;
    if ($value > 1){
        return hallo($value-1);
    }
}

hallo(100);
