<?php
function maytinh($a,$b){
    if($a ==0 || $b ==0){
        echo "Lỗi Ngoại lệ";
    } 
    else{
        $tong = $a +$b;
        $hieu = $a -$b;
        $tich = $a *$b;
        $thuong = $a / $b;
        echo "Tổng = ". $tong ."<br>";
        echo "Hiệu = ". $hieu ."<br>";
        echo "Tích = ". $tich ."<br>";
        echo "Thương = ".$thuong ."<br>";
    }
};
maytinh(5,10);