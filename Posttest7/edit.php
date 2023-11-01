<?php
session_start();
require "koneksi.php";
$id = $_GET["id"];

if(!isset($_SESSION['login'])){
    header('Location: login.php');
    exit;
}


$result = mysqli_query($conn, "select * from akun where id = '$id'");

$akun = [];

while ($row = mysqli_fetch_assoc($result)) {
    $akun[] = $row;
}

$akun = $akun[0];

if (isset($_POST["ubah"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $discord = $_POST["discord"];

    $result = mysqli_query($conn, "update akun set email = '$email', password = '$password', discord = '$discord' where id = '$id'");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'dash.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah!');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Di Puskesemas</title>
    <link rel="stylesheet" href="style/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="input">
        <h1>Mengubah Data</h1>
        <form action="" method="post">
            <div class="box-input">
                <i class="fa fa-envelope-open-text"></i> 
                <input type="text" name="email" id="" value="<?=$akun["email"]?>"> <br>

            </div>
            <div class="box-input">
                <i class="fa fa-lock"></i>
                <input type="text" name="password" id="" value="<?=$akun["password"]?>"> <br>

            </div>
            <div class="box-input">
                <i class="fa-brands fa-discord"></i>
                <input type="text" name="discord" id="" value="<?=$akun["discord"]?>"> <br>
            </div>
            <button type="submit" name="ubah" class="btn-input">Merubah</button>

            <div class="bottom">
                <p>Perlu Terdaftar
                    <a href="#">Nggak Ya? Yaudah</a>
                </p>
            </form>
    </div>
</body>
</html>