<?php

$i=random_int(1,999);
$j=random_int(1,999);

//加算
$k=$i+$j;
echo "{$i}+{$j}={$k} \n";

//減算
$k=$i-$j;
echo "{$i}-{$j}={$k} \n";

// 乗算
$k = $i * $j;
echo "{$i} * {$j} = {$k} \n";

// 除算
$k = $i / $j;
echo "{$i} / {$j} = {$k} \n";

// 剰余
$k = $i % $j;
echo "{$i} % {$j} = {$k} \n";

// 冪乗：**を使う書き方
$k = $i ** 3;
echo "{$i} ** 3 = {$k} \n";

// 冪乗：powを使う書き方
$k = pow($i, 3);
echo "pow({$i}, 3) = {$k} \n";
?>