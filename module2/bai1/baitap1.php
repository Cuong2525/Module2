<h1>Tính Lãi Suất Tương Lai </h1>
<form action="" method="POST">
    Số tiền:<input type="text" name="sotien" id="" required><br>
    Lãi suất:<input type="text" name="laisuat" id="" required><br>
    Số năm:<input type="text" name="sonam" id="" required><br>
    <input type="submit" value="Tính">
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sotien = $_POST["sotien"];
        $laisuat = ($_POST["laisuat"])/100;
        $sonam = $_POST["sonam"];
        $tienvalaive = $sotien;

        for($i =1; $i<= $sonam;$i++){
            $tienvalaive = $sotien +($sotien * $laisuat);
        }
        echo " Tiền ban đầu là:".$sotien."VND<br>";
        echo " Lãi là :".$laisuat."%<br>";
        echo " Số Năm là :".$sonam. "<br>";
        echo " Giá trị trong tương lai là ". $tienvalaive ;
    } ;
    