<?php







// // Nhập phần tử cần xoá từ bàn phím
// $delete_value = 7;

// $mang =[5,4,7,10,20,17];
// // Tìm vị trí của phần tử cần xoá trong mảng
// $index_del = array_search($delete_value, $mang);

// // Nếu phần tử cần xoá không tồn tại trong mảng
// if ($index_del === false) {
//     echo "Phần tử $delete_value không tồn tại trong mảng.";
// } else {
//     // Thực hiện xoá phần tử cần xoá
//     array_splice($mang, $index_del, 1);

//     // In ra mảng mới sau khi xoá
//     echo "Mảng mới: ";
//     var_dump($mang);
// }




$arr = [0, 1, 5, 3, 3, 3];

function tim(&$a) {
    $tim = 5;
    foreach ($a as $key => $value) {
        if ($tim == $value) {
            unset($a[$key]);
        }
    }
}

tim($arr);
var_dump($arr);