<?php
require 'functions.php';

$prestasi_pks = mysqli_query($conn, "SELECT * FROM prestasi_pks");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Prestasi PKS SMKN 1 Bantul</title>
	<link rel="shortcut icon" href="photo/7963fd134a319515ae2933b360d167b0.png" type="image/x-icon">
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
			<a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			PRESTASI
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="Prestasi PKS page.php">PKS</a></li>
				<li><a class="dropdown-item active" href="Prestasi KKR page.php">KKR</a></li>
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
          <a class="nav-link" href="Galeri.php">GALERI</a>
		</li>
		<li class="nav-item">
          <a class="nav-link" href="Index Admin.php">ADMIN</a>
		</li>
      </ul>
    </div>
  </div>
</nav>
    
    <div class="pksimage"><img src="Galeri/pks.jpeg"></div>
    
    <h1 class="prespksj">PRESTASI PKS</h1>
    <div class="prespksjline"></div>
    <div class="prespksj1"><h5>Berikut merupakan prestasi yang telah diraih oleh ekstrakulikuler PKS dari SMK Negri 1 Bantul</h5></div>

    <?php foreach( $prestasi_pks as $row ) : ?>
    <div class="prestasipks">
        <img src="photo/<?= $row["image"]; ?>" alt="">
        <div class="bluediv">
            <h4><?= $row["prestasi"]; ?> Tingkat <?= $row["tingkat"]; ?></h4>
        </div>
        <div class="prestasipksline"></div>
        <div class="txtprespks">
            <h5><?= $row["tanggal"]; ?></h5>
            <div class="txtprespksline"></div>
            <p><?= $row["deskripsi"]; ?></p>
            <div class="juaraprespks">
                <h6>Peringkat <?= $row["juara"]; ?></h6>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

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