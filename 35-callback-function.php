<?php
// opt 1
function nameFunctionV4($name, callable $function): string 
{
    $finalname = $function($name) . PHP_EOL;
    return $finalname;
};
// opt 2
function nameFunctionV5($name, callable $function): string 
{
    $finalname = call_user_func($function, $name) . PHP_EOL;
    return $finalname;
};

// wrap the function with ""
echo nameFunctionV4("masdika", "strtolower");
echo nameFunctionV5("dika", "strtoupper");


