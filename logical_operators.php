<?php

echo "論理演算子の確認\n";
var_dump( true && false );
var_dump( true || false );

$age=20;
$point=499;

var_dump($age>=20&&$point>=500);
var_dump($age>=20||$point>=500);

?>