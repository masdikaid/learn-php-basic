<?php

$name = "masdika";

$othername = $name; // just copy the value
$theothername = &$name; // its reference $name so if $theothername change the value so $name will change anyway


// reference in argument function
function changeName (&$name){
    $name = "dika adi setiawan";
}
changeName($name);
echo $name;


// returning reference
function &returnRef () {
    static $value = 100;
    return $value;
}

$a = &returnRef(); //this will reference $value of static value inside returnRef function 
echo $a . PHP_EOL;
$a = 500; //this will change static $value of returnRef

$b = &returnRef();
echo $b . PHP_EOL;