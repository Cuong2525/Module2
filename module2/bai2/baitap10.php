<?php
function tong($arr,$cot){
    $sum = 0;
    for($i =0; $i < count($arr);$i++){
        $sum += $arr[$i][$cot];
    }
    return $sum ;
}
$arr1 =[
    [4,5,6],
    [7,8,9],
    [10,11,12]
];
echo "Tổng các phần tử có vị trí 0 là".tong($arr1,0).'<br>';
echo "Tổng các phần tử có vị trí 1 là".tong($arr1,1).'<br>';
echo "Tổng các phần tử có vị trí 2 là".tong($arr1,2).'<br>';

