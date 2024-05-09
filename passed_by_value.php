<?php

function myFanc(int $val){
    $i*=2;
echo "in myFunc, i is {$i} \n";
}

$i=10;
myFanc($i);

echo "i is {$i} \n";