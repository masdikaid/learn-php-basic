<?php


// for loop with block 
// 3 parameter =>> initial value; condition; post value
for ( ; ; ) { //if parameter is blank this will be infinit loop
    echo "ini looping" . PHP_EOL;
};

for ($i = 1 ; $i <= 10 ; ++$i) {
    echo "ini looping" . PHP_EOL;
};



// for loop with colon
for ($i = 1 ; $i <= 10 ; ++$i) :
    echo "ini looping" . PHP_EOL;
endfor;