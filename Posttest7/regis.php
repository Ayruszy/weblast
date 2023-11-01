<?php

    require 'koneksi.php';

    if(isset($_POST['regis'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $result = mysqli_query($conn, 'SELECT * FROM user WHERE username = "$username"');

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username telah digunakan!');
                    document.location.href = 'regis.php';
                </script>
            ";
        } else {
            if($password === $cpassword){
                $password = password_hash($password, PASSWORD_DEFAULT);

                $result = mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password', '$password')");
                if(mysqli_affected_rows($conn) > 0)
                {
                    echo "
                        <script>
                            alert('Registrasi Berhasil!');
                            document.location.href = 'login.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Registrasi Gagal!');
                            document.location.href = 'regis.php';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Konfirmasi Password tidak sesuai!');
                        document.location.href = 'regis.php';
                    </script>
                ";
            }
        }

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
        <h1>Registrasi Yak!</h1>
        <form action="" method="post">
            <div class="box-input">
                <i class="fa fa-envelope-open-text"></i> 
                <input type="text" placeholder="Username" name="username" id="">
            </div>
            <div class="box-input">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="password" id="">
            </div>
            <div class="box-input">
                <i class="fa-solid fa-lock-open"></i>
                <input type="password" placeholder="Konfirmasi Password" name="cpassword" id="">
            </div>
            <button type="submit" name="regis" class="btn-input">Sign In</button>
            <div class="bottom">
                <p>Sudah Terdaftar ?
                    <a href="login.php">Login Ulang Sini!</a>
                </p>
            </form>
    </div>
    </form> 
    
</body>
</html>
