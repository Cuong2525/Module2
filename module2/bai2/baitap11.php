<?php
$arr = array();
    for ($i =0; $i <100;$i++){
        $arr[]=rand(0,100);
    };
echo "Mảng 100 số ngẫu nhiên ".implode('',$arr)."\n".'<br>'.'<br>';
    try{
        $index=1;
        if($index < 0 || $index >= 100){
            throw new Exception("Chỉ số không nằm trong mãng");
        }
        echo "Giá trị của phần tử có chỉ số ".$index. " Là " . $arr[$index]."\n";
    }
    catch(Exception $e){
        echo $e -> getMessage();
        die();
    }


