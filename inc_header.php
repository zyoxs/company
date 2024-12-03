<?php 
session_start();
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kecamatan Penjaringan</title>
    <link rel="stylesheet" href="<?php echo url_dasar()?>/css/style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #004aad;
            color: white;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav .wrapper {
            width: 80%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .logo a {
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
        nav .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav .menu ul li {
            margin: 0 15px;
        }
        nav .menu ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
        }
        nav .menu ul li a:hover {
            text-decoration: underline;
        }
        .hero-section {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)), url('gambar/snapedit_1733106974316.jpg') no-repeat center center;
            background-size: cover;
            height: 300px;
            display: flex;
            align-items: center;
            color: white;
        }
        .hero-content {
            margin-left: 20px;
        }
        .logo-image {
            width: 80px;
            height: 80px;
        }
        .address {
            margin-top: 10px;
            font-size: 16px;
        }
    </style>
</head>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo url_dasar()?>'>Kecamatan Penjaringan</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo url_dasar()?>#home">Home</a></li>
                    <li><a href="<?php echo url_dasar()?>#courses">Berita</a></li>
                    <li><a href="<?php echo url_dasar()?>#tutors">Anggota</a></li>
                    <li><a href="<?php echo url_dasar()?>#partners">Visi & Misi</a></li>
                    <li><a href="<?php echo url_dasar()?>#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero-section">
        <div class="container d-flex align-items-center">
            <!-- Logo -->
            <img src="/company/gambar/logo_jakut.png" alt="" class="logo-image me-3">
            <!-- Text Content -->
            <div class="hero-content">
                <h1 class="display-5 fw-bold">KECAMATAN</h1>
                <h2 class="fw-bold" style="color: #FFD700;">Penjaringan</h2>
                <p class="address">Jl. Pluit Raya No 05</p>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>
    <div class="wrapper">