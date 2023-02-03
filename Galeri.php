<?php
require 'functions.php';

$galeri_pks = mysqli_query($conn, "SELECT * FROM galeri_pks");
$galeri_kkr = mysqli_query($conn, "SELECT * FROM galeri_kkr");
$galeri_pramuka = mysqli_query($conn, "SELECT * FROM galeri_pramuka");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile PKS SMKN 1 Bantul</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
  	<a class="navbar-brand" href="Index.php">
      <img src="photo/logo-smk 1.png" alt="Bootstrap" width="150px" height="50px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Index.php">HOME</a>
        </li>
        <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			PROFILE
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="Profile PKS page.php">PKS</a></li>
				<li><a class="dropdown-item" href="Profile KKR page.php">KKR</a></li>
				<li><a class="dropdown-item" href="Profile Pramuka page.php">PRAMUKA</a></li>
			</ul>
        </li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			PRESTASI
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="Prestasi PKS page.php">PKS</a></li>
				<li><a class="dropdown-item" href="Prestasi KKR page.php">KKR</a></li>
				<li><a class="dropdown-item" href="Prestasi Pramuka page.php">PRAMUKA</a></li>
			</ul>
        </li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			PEMBIMBING
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="Pembimbing PKS page.php">PKS</a></li>
				<li><a class="dropdown-item" href="Pembimbing KKR page.php">KKR</a></li>
				<li><a class="dropdown-item" href="Pembimbing Pramuka page.php">PRAMUKA</a></li>
			</ul>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="Galeri.php">GALERI</a>
		</li>
		<li class="nav-item">
          <a class="nav-link" href="Index Admin.php">ADMIN</a>
		</li>
      </ul>
    </div>
  </div>
</nav>

    <div class="homeimage1">
        <img src="photo/smkn 1 bantul.jpg">
    </div>

    <h1 class="jgpks">Galeri PKS</h1>
    <div class="jgline"></div>
    <div class="container-gallery-pks">
        <?php foreach( $galeri_pks as $row ) : ?>
        <img src="photo/<?= $row["image"]; ?>">
        <?php endforeach; ?>
    </div>

    <h1 class="jgkkr">Galeri KKR</h1>
    <div class="jgline"></div>
    <div class="container-gallery-kkr">
        <?php foreach( $galeri_kkr as $row ) : ?>
        <img src="photo/<?= $row["image"]; ?>">
        <?php endforeach; ?>
    </div>


    <h1 class="jgpra">Galeri Pramuka</h1>
    <div class="jgline"></div>
    <div class="container-gallery-pramuka">
        <?php foreach( $galeri_pramuka as $row ) : ?>
        <img src="photo/<?= $row["image"]; ?>">
        <?php endforeach; ?>
    </div>

    <div class="footer">
<div class="container">
  <div class="row">
    <div class="col">
		<div class="leftfooter">
			<a href="https://www.smkn1bantul.sch.id/"><img class="logo1" src="photo/logo-smk 1.png"></a>
			<div class="line1"></div>
				<p class="pk">Pusat Keunggulan</p>
			<div class="line2"></div>
			<div class="sosmedimg">
				<a href="https://www.facebook.com/smknegeri1bantul"><img class="fb" src="photo/Facebook.png"></a>
				<a href="https://www.youtube.com/c/officialsmkn1bantul"><img class="yt" src="photo/Youtube.png"></a>
				<a href="https://www.instagram.com/smkn1bantul/"><img class="ig" src="photo/Instagram.png"></a>
				<a href="https://www.tiktok.com/@skansaba.id"><img class="tk" src="photo/Tiktok.png"></a>
			</div>
		</div>
    </div>
    <div class="col">
		<div class="kontak">
			<h1 class="judulkontak">Kontak</h1>
			<p><img src="photo/Vector.png"> smeanbtl@yahoo.com</p>
			<br>	
			<p><img src="photo/Vector-1.png"> Jl.Parangtritis KM 11 Sabdodadi Bantul Yogyakarta 55702</p>
			<br>
			<p><img src="photo/Vector-2.png"> 0274 - 513454</p>
			<br>
			<p><img src="photo/Fax.png"> 0274 - 542604</p>
		</div>
    </div>
  </div>
</div>
</div>


<div class="footerbottom">
	<p>Copyright © 2022 <a href="#">SMK Negeri 1 Bantul</a> | <a href="#">Developed by</a> 24 RPL 2</p>
</div>

    
</body>
</html>