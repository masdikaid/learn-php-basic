<?php

$nilai = 3;

// switch with block 
switch ($nilai) {
    case 1:
        echo "satu";
        echo PHP_EOL;
        break;

    case 2: // skip or use the same value such as case 3
    case 3:
        echo "dua atau tiga";
        echo PHP_EOL;
        break;
    
    default:
        echo "tidak diketahui";
        echo PHP_EOL;
        break;
};


// switch with colon 
switch ($nilai) :
    case 1:
        echo "satu";
        echo PHP_EOL;
        break;

    case 2: // skip or use the same value such as case 3
    case 3:
        echo "dua atau tiga";
        echo PHP_EOL;
        break;
    
    default:
        echo "tidak diketahui";
        echo PHP_EOL;
        break;
endswitch;