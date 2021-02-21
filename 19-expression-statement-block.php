<?php

// expression is everything that have value
$a = 5; //5 is expression
$b = $a; //$a is expression

function createValue(){
    return 100;
};

$c = createValue(); //create value is a expression


//statement is a complete command and ussualy end with ";"
$a = 10; //is a statement
vardump($a); //is a statement



//block is a collection of statement that start with "{" and end with "}"
function createValue2()
{ //block start
    $a = $a * 5;
    return $a;
}; //block end
