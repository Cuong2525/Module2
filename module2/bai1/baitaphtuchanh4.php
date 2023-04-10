<style>
    input{
        width:500px;
        font-size:16px;
        border: 3px solid #ccc;
        border-radius: 10px;
        padding: 10px 10px 10px 10px;
        float: left
    }
</style>
<h3>Từ Điển Anh - Việt</h3>
<form action="" method="post">
<input type="text" name="search" id="" placeholder="Nhập từ cần tìm "><br><br><br>
<input type="submit" value="Tìm Kiếm">
</form>
<?php
$tudien = [
   "hello" =>"Xin Chào",
   "thanks" =>"Cám ơn",
   "goodbye" =>"Tạm biệt",
   "book" => " Quyển sách",
   "computer" =>"Máy tính",
];
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $search= $_POST["search"];
    $flag =0;
    foreach($tudien as $key => $dich){
        if($key == $search){
            echo" Từ ". $key . " có nghĩa  ".$dich;
            $flag=1;
        }
    }
    if($flag ==0){
        echo " Không tìm thấy từ cần tra";
    }
}