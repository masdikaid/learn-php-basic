<?php

// global scope 
// variable that create in out of function is global scope variable
// function cant access global scope
$name = "masdikaid";
function sayHello(){
    // global $name; // use global to access global variable
    // echo "halo {$GLOBALS['name']}" . PHP_EOL; // or using $GLOBALS to access all globals variable
    echo "halo $name" . PHP_EOL; // undefine variable
};
sayHello();


// local scope 
// variable that create inside of function
// local scope cant access from out of function and just can access inside of function
function sayHei(){
    $nama = "dika";
    echo "halo $nama" . PHP_EOL;
};
sayHei();
echo "hei $nama" . PHP_EOL;


// static scope 
// static scope just can be applies to local scope
// static scope can be use if you dont want variable inside of function lost the value when the function finished, so you can use thus value again when run anymore 
function echoIncrement (){
    $counter = 0;
    // static $counter = 0; // use static if you want create static variable
    echo "counter {$counter}th" . PHP_EOL;
    $counter++;
}
echoIncrement();
echoIncrement();
echoIncrement();
echoIncrement();
echoIncrement();
