<?php
$mang =[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
// foreach ($mang as $key){
//     foreach($key as $value){
//         $mang[0][0]= $max ;
//         if
//     }
// }
//  $max =$mang[0][0] ;
// for($i =0 ;$i< count($mang); $i++){
//     for($j=0 ; $j< count($mang[$i]); $j++){
//         if($mang[$i][$j] > $max){
//             $max = $mang[$i][$j];
//         }
//     }
// };
// echo " Giá trị lớn nhất là ". $max ;


$max = $mang[0][0];
foreach($mang as $giatri){
    foreach($giatri as $sanpham){
        if($sanpham > $max){
            $max = $sanpham ;
        }
    }
};
echo "Kết quả lớn nhất là ". $max ;