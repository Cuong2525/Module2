
<?php
$danhsachkhachhang =[
    "1" =>[
        "name" => "Mai Van Hoan ",
        "birthday" => "1983/08/20",
        "address" => "Ha Noi",
        "profile" => "images/img1.jpg",
    ],
    "2" =>[
        "name" => "Nguyen Van Anh",
        "birthday" => "1983/08/21",
        "address" => "Bac Giang",
        "profile" => "images/img2.jpg",
    ],
    "3" =>[
        "name" => "Nguyen Thi Hoa",
        "birthday" =>"1980/08/19",
        "address" => " Ha Tay",
        "profile" => "images/img3.jpg",
    ],
    "4" =>[
        "name" => " Nguyen dinh Thi",
        "birthday" =>"1983/08/17",
        "address" => "Nam Dinh",
        "profile" => "images/img4.jpg",
    ],
    "5" =>[
        "name" => "Nguyen van Thao",
        "birthday" => "2000/08/19",
        "address" => " Ha Noi",
        "profile" => "images/img5.jpg",
    ],
];
function kiemngay($khachhangs,$tungay,$toingay){
    if(empty($tungay) || empty($toingay)){
        return $khachhangs;
    }
    $lockhachhang = [];
    foreach ($khachhangs as $khachhang ){
        if(strtotime($khachhang['birthday'])< strtotime($tungay)){
            continue;
        }
        if(strtotime($khachhang['birthday'])> strtotime($toingay)){
            continue;
        }
        $lockhachhang[] = $khachhang;
    }
    return $lockhachhang ;

};
$tungay = null;
$toingay = null;
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $tungay = $_REQUEST["tu"];
    $toingay = $_REQUEST["toi"];
    $lockhachhang = kiemngay($danhsachkhachhang,$tungay,$toingay);
}
?>
<form action="" method ="GET">
    Từ:<input type="date" name="tu" id="tu">
    Đến:<input type="date" name="toi" id="toi"><br>
    <input type="submit" value="Lọc">

</form>
<table border="1">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($lockhachhang as $ki => $khachhang): ?>
        <tr>
            <td><?php echo $ki ; ?></td>
            <td><?php echo $khachhang['name']; ?></td>
            <td><?php echo $khachhang['birthday']; ?></td>
            <td><?php echo $khachhang['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $khachhang['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

