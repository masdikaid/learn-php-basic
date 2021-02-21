<?php

// do while loop will do the bolck once and then check the condition and then run again the block if true is the result
// parameter =>> condition
$value = 100;
do{
    echo "ini while loop" . PHP_EOL;
    $value++;
} while ($value <= 10);