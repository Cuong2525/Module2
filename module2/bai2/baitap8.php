<form action=" " method="POST">
    <input type="text" name="nd" id="user" placeholder="Nhập nội dung"><br>
    <input type="text" name="cc" id="" placeholder="Nhập Chữ Cái">
    <input type="submit" value="Kiểm tra">
</form>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $noidung = $_POST["nd"];
    $kytu = $_POST["cc"];
    $dodai = strlen($noidung);
    $count=0;

    for($i=0 ; $i<$dodai;$i++ ){
    if($kytu == $noidung[$i]){
        $count++;
        }
    }
    echo $kytu . " Số lần xuất hiện ký tự là ".$count;

}