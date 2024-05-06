<?php

$i = random_int(0, 255);
$j = random_int(0, 255);

$k = $i & $j;
printf("%x & %x = %x \n", $i, $j, $k);

$k = $i | $j;
printf("%x | %x = %x \n", $i, $j, $k);

$k = $i ^ $j;
printf("%x ^ %x = %x \n", $i, $j, $k);

$k = ~$i;
printf("~%x = %x \n", $i, $k);

//練習問題

$item=1800;
$taxPrice=$item+$item*0.1;
echo "{$taxPrice} \n";

$familyName="onoda";
$firstName="shogo";
$name="{$familyName}{$firstName} \n";
echo "{$name} \n";
?>