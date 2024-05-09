<?php
error_reporting(-1);
ini_set('display_errors', 'on');

$input=$_GET["input_text"]??"";

function h(string $s):string{
    return htmlspecialchars($s, ENT_QUOTES);
}

echo "あなたが入力したのは " , h($input) , " ですね";