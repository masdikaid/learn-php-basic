<?php

// u can use arrow fucntion when need simple annonymouse function and you can access global variable
// arrow function auto return the value, so you dont need return 
$day = "nigth";
$myarrow = fn($name) => "good $day $name" . PHP_EOL;
echo $myarrow("masdika");