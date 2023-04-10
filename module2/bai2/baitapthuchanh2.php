 <style>
.trumcuoi {
    border: 5px solid green;
    font-size: 25px;
    background-color: #7B68EE;
    text-align: center;
}
 </style>
 <form action="" method="POST" class='trumcuoi'>
     User : <input type="text" name="name" id=""><br>
     Email:<input type="email" name="email" id=""><br>
     SDT :<input type="number" name="phone" id=""><br>
     <input type="submit" value="Nhập">
 </form>
 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST["name"];
    $mail = $_REQUEST["email"];
    $phone =$_REQUEST["phone"];
    // $thongtin=[];
    // // $errors =[];
    // // if(empty($email)){
    // //     $errors[]
    // // }

    // $thongtin +=[
    //     'ten'=> $name,
    //     'mail' => $mail,
    //     'phone' => $phone,
    // ];
    //     print_r($thongtin);
       
    // $errors =[];
    if(!isset($_REQUEST["name"]) || empty($_REQUEST["name"])){
        $errors[] = "Vui lòng nhập tên người dùng";
    }
    if(!isset($_REQUEST["email"]) || empty($_REQUEST["email"])){
        $errors[] = "Vui lòng nhập địa chỉ email";
    }
    if(!isset($_REQUEST["phone"]) || empty($_REQUEST["phone"])){
        $errors[] = "Vui lòng nhập số điện thoại";
 };
 if(!empty($errors)){
    echo "<p>Có lỗi xảy ra:</p>";
    echo "<ul>";
    foreach($errors as $error){
        echo "<li>$error</li>";
    }
    echo "</ul>";
}
}