<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $errors = [];

    if (empty($name)) {
        $errors[] = "Vui lòng nhập tên của bạn.";
    }

    if (empty($email)) {
        $errors[] = "Vui lòng nhập email của bạn.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không hợp lệ.";
    }

    if (empty($phone)) {
        $errors[] = "Vui lòng nhập số điện thoại của bạn.";
    }

    if (empty($errors)) {
        if (saveDataJSON("users.json", $name, $email, $phone)) {
            echo "Đăng ký thành công!";
        } else {
            echo "Đăng ký thất bại.";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

function saveDataJSON($filename, $name, $email, $phone) {
    try {
        $data = [];
        $data["name"] = $name;
        $data["email"] = $email;
        $data["phone"] = $phone;

        $jsonString = file_get_contents($filename);
        $jsonArray = json_decode($jsonString, true);
        $jsonArray[] = $data;
        $jsonData = json_encode($jsonArray, JSON_PRETTY_PRINT);
        file_put_contents($filename, $jsonData);

        return true;
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký người dùng</title>
</head>
<body>
    <h1>Đăng ký người dùng</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Tên người dùng:</label>
        <input type="text" name="name"><br><br>
        <label>Email:</label>
        <input type="text" name="email"><br><br>
        <label>Điện thoại:</label>
        <input type="text" name="phone"><br><br>
        <input type="submit" value="Đăng ký">
    </form>
</body>
</html>