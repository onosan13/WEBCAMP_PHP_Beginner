<?php

function namToDouble(int $i):int{
    $ret=$i*2;
    return $ret;
}

$num= namToDouble(10);
echo "{$num}\n";

function numAdd(int $a,int $b):int{
    $ret=$a+$b;
    return $ret;
}

$add= numAdd(5,6);
echo "{$add}\n";