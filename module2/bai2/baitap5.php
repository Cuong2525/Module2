<?php
$mang =[3,5,6,45,3,1,55,40];
$min = $mang[0];
foreach($mang as $key){
    if($key <$min ){
        $min = $key;
    }
};
echo" Giá trị nhỏ nhất là ". $min;
