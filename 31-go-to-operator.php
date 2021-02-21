<?php

// go to is sign with colon like "sign:"

goto a;
echo "hello world" . PHP_EOL; // this line will be skip

a:
echo "hello world a" . PHP_EOL;


// more example

$nilai = 0;
while (true) {
    if ($nilai == 10){
        echo "break at $nilai" . PHP_EOL;
        goto end;
    };
    echo $nilai . PHP_EOL;
    $nilai++;
};

end:
echo "end the loop" . PHP_EOL;
