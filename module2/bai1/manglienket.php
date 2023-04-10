<?php
// khai báo mảng liên kết
$thongtin = [
    'phi'=> 24,
    'long' => 34,
    'hieu' => 44,
    'khuong' => 54,
    'cuong' => 64,
];
//truy cap phan tu
echo $thongtin['hieu'];
echo '<pre>';
print_r($thongtin);
echo '</pre>';
//thay đổi giá trị phân tử
echo $thongtin['cuong']= 15 ;
echo '<pre>';
print_r($thongtin);
echo '</pre>';
//xóa ptu theo chi số
unset($thongtin['cuong']) ;
echo '<pre>';
print_r($thongtin);
echo '</pre>';

//duyệt mảng
foreach($thongtin as $key => $value){
    echo $value;
    echo '<br>';
}
//thêm phần tử vào mảng ;
$thongtin['tam']= 23;
echo '<pre>';
print_r($thongtin);
echo '</pre>';