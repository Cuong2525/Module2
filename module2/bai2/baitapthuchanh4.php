<?php
$a=[10,5,23,7,2,50,38];
function timsonhonhat($a){
    $min =$a[0];
    $vitri=0;
    for($i =1 ; $i <count($a); $i++){
        if($a[$i]<$min){
            $min =$a[$i];
            $vitri = $i ;
        }
    }
    echo "Phan tu nho nhat la " .$min."vi tri la ".$vitri ;
}
timsonhonhat($a);

