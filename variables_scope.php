<?php

$a = 10;
echo "global:a is {$a} \n";

function myFanc(){
    $b = 999;
    echo "in function:b is {$b} \n";
}

myFanc();

echo "global:b is {$b} \n";