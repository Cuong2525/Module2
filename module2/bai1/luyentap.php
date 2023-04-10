<?php
//tạo một hằng số có tên là SDT và gán giá trị cho nó là 09090909
// define('SDT','09090909');
// echo SDT;

//sử dụng vòng lặp
// $tong=0;
// for($i = 0 ; $i <100 ; $i++){
//     $tong = $tong + $i;
//     echo '<pre>';
//     echo $tong;
//     echo'</pre>';
// }
// echo $tong;

//Hoán đổi giá trị trong biến
// function hoandoi($a,$b){
//     $tam = $a;
//     $a = $b;
//     $b = $tam;
//     echo " Giá trị của a là ". $a ;
//     echo " Giá trị của b là ". $b ;
// };
// hoandoi(51,153);

//Kiểm tra 1 số xem có nằm trong 5 ,10 ,20 hay không ví dụ?

// function kiemtra($a){
//     $flag = false;

//     if ($a == 5){
//         $flag = true;
//     }
//     if ($a == 10){
//         $flag = true;
//     }
//     if ($a == 20){
//         $flag = true;
//     }
//     if($flag){
//         echo " Hợp lệ";
//     }else{
//         echo "Không hợp lệ";
//     }

// }
// kiemtra(3);

// $tuoi = '100';
// $tuoi = (int)$tuoi;
// echo $tuoi;
 
// $a = '123';
// $b =123;
// $c= $a + $b;
// echo $c;
//$a = '123';  // Biến $a là kiểu chuỗi có giá trị bằng '123'
//$b = 123; // Biến $b là kiểu INT có giá trị bằng 123
//$c = $a + $b; // Biến C là kết quả của phép toán $a + $b và sẽ có giá trị là 246 nên nó là kiểu INT
//var_dump(is_int($a)); // kết quả là false vì biến $a là kiểu string
//var_dump(is_int($b));
//var_dump(is_int($c)); // hàm is_int($tenbien) dùng để kiểm tra một biến có phải là kiểu INT hay không

// $a = '1231231233ff';
// $a = (int)$a;
// echo $a;

// Cách 1:
// $sinhvien = array('Nguyễn Văn A','Nguyễn Văn B');

// print_r($sinhvien);

// echo'<br>';
//cách 2:
// $sinhvien1 = array(
//     0 => 'Nguyễn văn C',
//     1 => 'Nguyễn văn D'
// );
// print_r($sinhvien1);

// $sinhvien = array(
//     0 => 'Nguyễn Văn A' ,
//     1 => 'Nguyễn Văn B' ,
// );
// echo $sinhvien[0];echo'<br>';
// echo $sinhvien[1];

$a =[];
$a[0][1] = 123 ;
$a[0][2] = 321 ;

echo $a[0][1];echo '<br>';
echo $a[0][2];































?>
