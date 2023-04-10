

    <?php
    // $book=['van','su','dia']
    // $book=



    // echo '<pre>';
    // print_r($_SERVER);
    // echo '</pre>';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        // echo '<pre>';
        // print_r($_REQUEST);
        // echo '</pre>';

        // echo '<br>'.$_REQUEST['username'];
        // echo '<br>'.$_REQUEST['email'];
        // echo '<br>'.$_REQUEST['password'];

        $username =$_REQUEST['username'];
        $email =$_REQUEST['email'];
        $password =$_REQUEST['password'];
         
        if($username =='admin' && $password =='123'){
            echo 'Chào mừng admin';
        }else{ 
            echo 'Tài khoản không tồn tại';
        }


    }

    ?>
    <form action="" method="post">
        Username:<input type="text" name="username" id=""><br>
        Email:<input type="email" name="email" id=""><br>
        Password:<input type="password" name="password" id=""><br>
        <input type="submit" value="Gửi">
    </form>
