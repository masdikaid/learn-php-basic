<?php
// while loop will check the condition and then run the block if true is the result
// parameter =>> condition
// while with block
$value = 1;
while ($value <= 10){
    echo "ini while loop" . PHP_EOL;
    $value++;
};


// while with colon
$value = 1;
while ($value <= 10):
    echo "ini while loop colon" . PHP_EOL;
    $value++;
endwhile;