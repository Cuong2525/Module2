<?php
if(isset($_POST['num1'])&& isset($_POST['num2']) && isset($_POST['xuly'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $xuly = $_POST['xuly'];
    
    
    switch($xuly){
        case "+":
            echo "Kết quả ". $num1 + $num2;
            break;
        case "-":
            echo "Kết quả ".  $num1 - $num2;
            break;
        case "*":
            echo "Kết quả ". $num1 * $num2;
            break;
        case "/":
            if($num2 ==0){
            echo ("Lỗi chia cho 0");
            }
            else{
            echo "Kết quả ".  $num1 / $num2;
            break;
            }
        }
    }

