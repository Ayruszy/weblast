<?php
session_start();
require "koneksi.php";

if(!isset($_SESSION['login'])){
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Puskesmass </title>
    <link rel="icon" href="asset/log.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- Navbar -->

    <nav>
        <input type="checkbox" name="" id="nav-button">
        <label for="nav-button">&#9776</label>

        <div class="logo">
                <img src="asset/log.png" alt=""> 
        </div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#setting">Setting</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a id="contact" href="#home">Contact</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="logout.php">Log Out</a></li>
            <li><a href="dash.php">Database</a></li>
            <li><i id="toggleDark" class="fa-solid fa-moon"></i>
        </ul>
    </nav>

    <header class="land" id="home">
        <img src="asset/Landing.png" alt="">
    </header>

<!-- Isi Konten -->

<div class="container" id="service">
    <main class="grid">
        <article>
            <img src="asset/umum.png"> 
            <h2> POLI UMUM </h2>
            <p>Layanan medis dasar untuk berbagai <br> jenis penyakit dan kesehatan.</p>
        </article>
        <article>
            <img src="asset/gigi.png">
            <h2> POLI GIGI </h2>
            <p> Fasilitas kesehatan yang menyediakan perawatan gigi dan mulut. </p>
        </article>
        <article>
            <img src="asset/kb.png">
            <h2> POLI KB </h2>
            <p>Tempat di mana pasien dapat mendapatkan informasi, konseling</p>
        </article>
        <article>
            <img src="asset/apotek.png">
            <h2> APOTEK </h2>
            <p>empat di mana obat-obatan, suplemen kesehatan, </p>
        </article>
        <article>
            <img src="asset/lab.png">
            <h2> LABORATORIUM </h2>
            <p>asilitas kesehatan di mana dilakukan pengujian dan analisis </p>
        </article>
        <article>
            <img src="asset/loket.png">
            <h2> LOKET </h2>
            <p>Area di pusat kesehatan masyarakat tempat pasien mendaftar</p>
        </article>
    </main>
</div>


<!-- Isi Biodata -->

<div class="biodata">

    <div class="bio" id="about">
        <h1>Hai Aku Suryak </h1>
        <p>Nama Panjangku Surya Abdi Febrianto Kelas Informatika B22 <br> NIM 2209106074 Kelahiran 2005 Hobi Futsal <br> Quotes MangEakkkk.....</p>
        <a id="bio-button" >LIHAT BIOGRAFI GUWEH</a>
        <p id="Biodata"></p>
        
    </div>
    
    <div class="imgs">
        <img src="asset/Profile2.png" alt="">
    </div>
</div>



<!-- Footer -->

        <footer>
        <div class="footer" id="setting">
            <div class="icon">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footern">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footerb">
                <img src="asset/log.png" alt="">
                <p>Copyright 2023,Designed By Surya aka Ayruszy</p>
            </div>
        </div>
        </footer>
    <script src="script.js"></script>
</body>
</html>

