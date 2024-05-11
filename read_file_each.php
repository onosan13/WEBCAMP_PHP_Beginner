<?php

$file_name=__FILE__;

$file_obj= new SplFileobject($file_name);

foreach($file_obj as $no =>$line){
    echo "{$no}:$line";
}