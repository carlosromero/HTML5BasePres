<?php 
    $ex["octal1"] = 0755;
    $ex["octal2"] = 0777;
    $ex["hexa1"] = 0x123;
    $ex["hexa2"] = 0XFF;
   foreach($ex as $key => $value){
    echo $key. ":" .$value."";
   }
