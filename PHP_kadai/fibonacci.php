<?php

$first=[0,1];

foreach($first as $f){
    echo "{$f}\n";
}

for($i=0;$i<100;$i++){
    $array_0=$first[0];
    $array_1=$first[1];

    $result=$array_0+$array_1;
    echo "{$result}\n";
    $first[0]=$array_1;
    $first[1]=$result;
    
    if($result>10000){
        break;
    }
}