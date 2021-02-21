<?php
// basic annonymous fucntion
$myfunction = function (string $name): string
{
    return "$name ID";
};


// annonymous function in function
function goodDay($name, $word){
    echo $word($name) . PHP_EOL;
};

goodDay("masdika", function ($name){
    return "Hellowwww $name";
});

// to use global variable in anonymous function should use "use ($variable1, $variable2)"
// "use" just copy the variable once when the annon function declare so not affect when variable change
// if you want to dont declare "use" you can use arrow function
$time = "Night";
$hello = function($name) use ($time) {
    echo "good $time $name";
};

$hello("masdika");