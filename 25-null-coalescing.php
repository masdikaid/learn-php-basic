<?php

$myarray =[];
$num = null;


// traditional way to check data is null
var_dump(isset($num));
var_dump(is_null($num));
var_dump(isset($myarray[1]));


//coalescing null using "??"
echo $num ?? "kosong" . PHP_EOL;
echo $myarray[1] ?? "tidak ada" . PHP_EOL;
