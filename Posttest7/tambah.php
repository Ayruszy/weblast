<?php
session_start();
require "koneksi.php";

if(!isset($_SESSION['login'])){
    header('Location: login.php');
    exit;
}

if (isset($_POST["tambah"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $discord = $_POST["discord"];
    $date = date("Y-m-d H-i-sa");
    $gambar = $_FILES['gambar']['name'];
    $explode = explode('.', $gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$date $nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/' . $gambar_baru)) {
    $result = mysqli_query($conn, "insert into akun 
        (id, password, email, discord, gambar) 
        values ('', '$password', '$email', '$discord', '$gambar_baru')");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'dash.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'tambah.php';
            </script>
        ";
    }
} else {
    echo "Gagal Mengupload Gambar";
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
<form action="" method="post" enctype="multipart/form-data">
    <div class="input">
        <h1>Masukkan Data</h1>
        <form action="" method="post">
            <div class="box-input">
                <i class="fa fa-envelope-open-text"></i> 
                <input type="email" placeholder="Email" name="email" id="">
            </div>
            <div class="box-input">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="password" id="">
            </div>
            <div class="box-input">
                <i class="fa-brands fa-discord"></i>
                <input type="discord" placeholder="Discord" name="discord" id="">
            </div>
            <div class="box-input">
            <i class="fa-regular fa-image"></i>
            <input type="file" name="gambar" id=""><br>
            </div>
            <button type="submit" name="tambah" class="btn-input">Tambahkan</button>
            <div class="bottom">
                <p>Perlu Terdaftar
                    <a href="#">Nggak Ya? Yaudah</a>
                </p>
            </form>
    </div>
    </form> 
    
</body>
</html>
