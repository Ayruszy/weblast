
<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        var_dump($row);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['username'];
            header('Location: index.php');
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Di Puskesmas</title>
    <link rel="icon" href="asset/log.png">
    <link rel="stylesheet" href="style/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <div class="input">
        <h1>Log In Cuy!</h1>
        <?php
    if (isset($error)) {
        echo "<p style='color: white;'> Username/Password Salah! </p>";
    } else {
        echo "<p style='color: white; display:none;'> Username/Password Salah! </p>";
    }
    ?>
        <form action="" method="post">
            <div class="box-input">
                <i class="fa fa-envelope-open-text"></i> 
                <input type="text" placeholder="Username" name="username" id="">
            </div>
            <div class="box-input">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="password" id="">
            </div>
            <button type="submit" name="login" class="btn-input">Log In</button>
            <div class="bottom">
                <p>Perlu Terdaftar
                    <a href="regis.php">Regis Dulu Oyy!</a>
                </p>
            </form>
    </div>
    </form> 
    
</body>
</html>
