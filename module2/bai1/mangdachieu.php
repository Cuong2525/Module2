<?php
$tusach =[
    ['van','su','dia'],
    ['toan','ly','hoa']
];
//truy cap phan tu
echo '<pre>';
print_r($tusach);
echo '</pre>';
//truy cap phan tu ; dia
echo $tusach[0][2];
//thay doi gia tri phan tu ; van thanh van hoc
$tusach[0][0] = 'van hoc';
//xoa phan tu theo chi so
// array_splice($tusach[1],1,1);

//duyet mang
for($i=0;$i < count($tusach);$i++){
    for($j =0;$j < count($i);j++ ){
        echo $tusach[$i][$j];
        echo '<br>'
    }
}
