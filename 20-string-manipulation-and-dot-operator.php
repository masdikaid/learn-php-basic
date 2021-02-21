<?php
// dot operator in string is to increment string value
var_dump("masdika"."ID");
echo "saya"."masdikaID".PHP_EOL;
echo ":)";



// access string caracter
$name = "masdikaID";
// string like array nad can be access with index
var_dump($name[1]);


// variable parsing
echo "saya $name" . PHP_EOL; // just support to double quote string or heredoc

echo <<<'STRING'
saya adalah $name 
STRING . PHP_EOL;

echo <<<STRING
saya adalah $name 
STRING . PHP_EOL;

echo <<<"STRING"
saya adalah $name 
STRING . PHP_EOL;

echo <<<"STRING"
saya adalah {$name}s 
STRING . PHP_EOL; //curly brace is to isolate the variables, so we can add "s" in $name (will be $names and reference to $names variable)

echo "saya {$name}s" . PHP_EOL;
