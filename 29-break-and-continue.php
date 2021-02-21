<?php

// break is for stop the loop
// continue is to loop the looping
$nilai = 0;
while (true) {
    if ($nilai == 10){
        echo "break at $nilai" . PHP_EOL;
        break;
    };
    echo $nilai . PHP_EOL;
    $nilai++;
};

$nilai = 0;
while (true) {
    if ($nilai == 10){
        echo "continue at $nilai" . PHP_EOL;
        $nilai++;
        continue;
    };
    echo $nilai . PHP_EOL;
    $nilai++;
};