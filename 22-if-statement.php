<?php
// one statement if statement
if (false) 
echo "berhasil" . PHP_EOL; 
else if (false) // elsif can use "else if" or "elseif"
echo "dalam proses" . PHP_EOL;
else 
echo "gagal" . PHP_EOL ; // one line/statement if with no block


// multiple line if statement
if (true) {
    echo "berhasil" . PHP_EOL ;
} 
elseif (false) {
    echo "dalam proses" . PHP_EOL;
} 
else {
    echo "gagal" . PHP_EOL ;
}


// another way if statement with colon
if (true) :
    echo "berhasil" . PHP_EOL ;

elseif (false) : // if with colon cant use "else if"
    echo "dalam proses" . PHP_EOL;

else :
    echo "gagal" . PHP_EOL ;

endif; //should use endif to end the if statement


// one line or ternary operator 
$name = true;
$new = $name ? "benar" : "salah";