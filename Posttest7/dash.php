<?php
session_start();
require "koneksi.php";

if(!isset($_SESSION['login'])){
    header('Location: login.php');
    exit;
}
$result = mysqli_query($conn, "select * from akun");

$akun = [];

while ($row = mysqli_fetch_assoc($result)) {
    $akun[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seluruh Data Pengunjung</title>
    <link rel="stylesheet" href="style/crud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
<p class="tanggal">Hari ini : <?php date_default_timezone_set("Asia/Makassar"); echo date('l, d F Y | h:i:sa e ')?></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Discord</th>
            <th>gambar</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($akun as $akn) : ?>
            <tr>
                <td> <?= $i; ?> </td>
                <td> <?php echo $akn["email"] ?> </td>
                <td> <?= $akn["password"] ?> </td>
                <td> <?= $akn["discord"] ?> </td>
                <td> <img src="img/<?= $akn['gambar'] ?>" alt="ini gambar" width="50px" height="50px"> </td>
                <td><a href="edit.php?id=<?=$akn["id"];?>"<i class="fa-solid fa-pen-to-square"></i></a>          
                <td><a href="hapus.php?id=<?=$akn["id"];?>"<i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
        <tr class=home>
        <th colspan="3"><a href="index.php">Kembali Ke Beranda </a></th>
        <th colspan="4"><a href="tambah.php">Nambah Gak!</a></th>
        </tr>
    </table>
</body>

</html>