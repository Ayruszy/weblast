<?php
session_start();

// echo $_SESSION['email'] ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Berhasil</title>
        <link rel="stylesheet" href="style/style2.css">
</head>
<body>
    <div class="input">
        <h1>Berhasil Ditambahkan</h1>
                <p>Email : <?= $_SESSION['email']?></p>
                <p>Password : <?= $_SESSION['password']?></p>
                <p>Discord : <?= $_SESSION['discord']?></p>
                <p>Hebat Nggak,Nggak Ya? Yaudah. 
                    <a class="nanya" href="index.html"> Lanjut Ke Website</a>
                </p>
            </form>
    </div>
</body>
</html>