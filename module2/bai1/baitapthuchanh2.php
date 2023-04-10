<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action=""  method="post">
        <h1>Login<h1>
        UserName: <input type="text" name="username" id="">  <br> 
        Password: <input type="password" name="password" id=""> <br>
        <input type="submit" value="Sign in">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username === 'admin' && $password === 'admin'){
            echo "Welcome ".$username;
        }else{
            echo "login error";
        }

    }
    ?>
</body>
</html>