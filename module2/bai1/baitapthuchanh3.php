<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .cuong{
        
        
    }
</style>
<body>

    <h2> Danh Sách khách hàng </h2>
    <table border="1" class="cuong">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>

        </tr>
    <?php
    $khachhang =[
        "1"=>[
            "ten" => "Mai Van Hoan" ,
            "ngaysinh" => "1983-08-20" ,
            "diachi" => "Ha Noi" ,
           "anh" =>"https://icdn.dantri.com.vn/thumb_w/640/2018/3/14/hot-girl-anh-the-huong-le-xe-buyt8-15210195344091865692058.jpg"
        ],
        "2"=>[
            "ten" => 'Nguyen thuy van' ,
            "ngaysinh" => "1983-08-21" ,
            "diachi" => "Bac Giang" ,
           "anh" =>"http://anhdepbonphuong.com/wp-content/uploads/2015/12/hinh-anh-10-hot-girl-viet-nam7-.jpg"
        ],
        "3"=>[
            "ten" => 'Nguyen thai hoa' ,
            "ngaysinh" => "1983-08-22" ,
            "diachi" => "Nam Dinh ",
           "anh" =>"http://giupban.com.vn/wp-content/uploads/2019/09/anh-hot-girl-16.jpg"
        ],
        "4"=>[
            "ten" => 'Tran thuy thao',
            "ngaysinh" => "1983-08-17",
            "diachi" => "Ha Tay",
           "anh" =>"https://keomoi.com/wp-content/uploads/2019/05/anh-gai-dep-de-thuong-hinh-14.jpg"
        ],
        "5"=>[
            "ten" => 'Nguyen dinh thi',
            "ngaysinh" => "1983-08-19" ,
            "diachi" => "Ha Noi ",
           "anh" =>"http://nhandaovadoisong.com.vn/wp-content/uploads/2019/05/hinh-anh-hot-girl-de-thuong-19.jpg"     
           ]
    ];
    ?>
   > <?php foreach($khachhang as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value["ten"] ?></td>
        <td><?php echo $value["ngaysinh"] ?></td>
        <td><?php echo $value["diachi"] ?></td>
        <td><img src="<?php echo $value["anh"] ?>" Width="100" height="90"></td>
    </tr>
    <?php endforeach; ?>

    </table>
</body>
</html>