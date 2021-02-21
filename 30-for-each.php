<?php

$name_list = ["masdika", "dika", "adi", "setiawan"];

// for loop way
for ($i = 0; $i < count($name_list); $i++){
    echo "$i. nama : $name_list[$i]" . PHP_EOL;
};


// for each way
foreach ($name_list as $name) {
    echo "- name : $name" . PHP_EOL;
}

// for each way with index or key for map
foreach ($name_list as $key => $name) {
    echo "$key. name : $name" . PHP_EOL;
}