<?php
$my_array = [1, 2, 3, 1.2, 0.4, "masdika"];
var_dump($my_array);
echo "\n";

// call data
echo $my_array[5];
echo "\n";

// change array
$my_array[5] = "adi";
echo $my_array[5];
echo "\n";

// add array to last index
$my_array[] = true;
var_dump($my_array);
echo "\n";

// remove array
unset($my_array[0]);
var_dump($my_array);
echo "\n";
