<?php
// require 
// require is if file not exists program will stop
require "lib/myFunction.php";


// include
// if the file not exists program just show warning messege
include "32-function.php";


// require_once and include_once
// to avoid redeclare function about import same module in a few times, use required once or include once to solving this issue
require_once "32-function.php";
include_once "lib/myFunction.php";