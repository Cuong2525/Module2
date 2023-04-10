<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mota = $_POST["mota"];
    $gia = $_POST["gia"];
    $tylechietkhau = $_POST["chietkhau"];

    $luongchietkhau = $gia * $tylechietkhau *0.1;

    echo " Tên sản phẩm: " .$mota." Giá ban đầu là: ".$gia. " Gía trị sau chiết khấu là: ".$luongchietkhau ;
}