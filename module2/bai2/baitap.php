<?php
    $mang1=[5,2];
    $mang2=[5,6];
    $mang3=[];
 
    foreach($mang1 as $key){
        array_push($mang3,$key);
    };
    foreach($mang2 as $key1){
         array_push($mang3,$key1);
    };
 
    echo "<pre>";
    print_r($mang3);
    echo "</pre>";
?>