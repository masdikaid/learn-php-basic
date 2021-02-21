<?php


function myFunction(){ // function not run in declaration
    echo "this is myFunction" . PHP_EOL;
};
// call the function
myFunction();
myFunction();



// function with argument
function nameFunction($firstname, $lastname){
    echo "my name is : $firstname $lastname" . PHP_EOL;
};
nameFunction("dika", "adi setiawan");
nameFunction("rudi", "hidayat");



// function with default argument
function nameFunctionV2($firstname, $lastname="aja"){
    echo "name : $firstname $lastname" . PHP_EOL;
};
nameFunctionV2("dika", "adi setiawan");
nameFunctionV2("rudi");



// function with default argument and specific data type
// string, int, float, bool, array etc
function sumInteger(int $nilai1, int $nilai2){
    $total = $nilai1 + $nilai2;
    echo "total : $total" . PHP_EOL;
};
sumInteger(100, 100);
sumInteger("100", "100");



// function with length argument list with "..."
function sumAll(int ...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "total semua : $total" . PHP_EOL;
};
sumAll(100, 100, 50, 200);
sumAll(100, 100, 50, 200, 70, 30);
$myarr = [100, 100, 50, 30, 70];
sumAll(...$myarr); //use "..." to extraxt array



// return function
function nameFunctionV3($firstname, $lastname){
    $fullname = "$firstname $lastname";
    return $fullname;
};
echo nameFunctionV3("masdika", "ID") . PHP_EOL;



// return type function
function nameFunctionV4($firstname, $lastname): string 
{
    $fullname = "$firstname $lastname";
    return $fullname;
};
echo nameFunctionV4("dika", "adi setiawan") . PHP_EOL;



// variable function
$vnameFuncV4 = "nameFunctionV4";
echo $vnameFuncV4("rudi", "indrawan") . PHP_EOL;