<?php 
$conn = mysqli_connect("localhost", "root", "", "datawebsite");

$member = mysqli_query($conn, "SELECT * FROM pengurus_kkr");

$schedule = mysqli_query($conn, "SELECT * FROM jadwal_kkr");

$event = mysqli_query($conn, "SELECT * FROM event_kkr");

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

    <!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <title>Profile KKR SMKN 1 Bantul</title>
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
			<a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			PROFILE
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="Profile PKS page.php">PKS</a></li>
				<li><a class="dropdown-item active" href="Profile KKR page.php">KKR</a></li>
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
          <a class="nav-link" href="Galeri.php">GALERI</a>
		</li>
		<li class="nav-item">
          <a class="nav-link" href="Index Admin.php">ADMIN</a>
		</li>
      </ul>
    </div>
  </div>
</nav>
    
    <div class="homeimage"><img src="Galeri/kkr6.png"></div>
    
    <h1 class="ppkkrj">PROFILE KKR</h1>
    <div class="ppkkrjline"></div>
    
    <div class="dpks">
        <img class="quote1" src="photo/quote.png">
        <div class="dpks1">Kader Kesehatan Remaja (KKR) merupakan peserta didik yang dipilih guru guna ikut melaksanakan sebagian usaha pelayanan kesehatan terhadap diri sendiri, kelurga, teman peserta didik pada khususnya dan sekolah pada umumnya.</div>
        <img class="quote2" src="photo/quote.png">
    </div>
    
    <div class="backvmpksj">
        <div class="vmpks">
            <h1 class="vmkkrj">VISI & MISI</h1>
            <div class="vmkkrline"></div>
            <img class="visipksimg" src="Galeri/kkr5.jpeg">
            <div class="visikkr">
                <img src="photo/checklistkkr.png" alt="">
                <div class="txtvisikkr">
                    <h1>VISI</h1>
                    <p>COMMING SOON!</p>
                </div>
            </div>
            <img class="misipksimg" src="Galeri/kkr4.jpeg">
            <div class="misikkr">
                <img src="photo/checklistkkr.png" alt="">
                <div class="txtmisipks">
                    <h1>MISI</h1>
                    <ul type="circle">
                        <li>- Mengajarkan kedisiplinan dan ketertiban untuk para siswa.</li>
                        <li>- Taat beribadah.</li>
                        <li>- Mengajarkan penerapan etika berlalu lintas.</li>
                        <li>- Mengadakan pratoli di seluruh lingkungan sekolah secara berkala.</li>
                    </ul>
                </div>
            </div>
        </div> 
    </div>
    
    <div class="tntpks">
        <div class="jtntkkr">
            <h1>TUJUAN & TUGAS</h1>
        </div>
        <div class="linetntkkr"></div>
        <div class="ltntkkr">
            <ol>
                <li>1. Meningkatkan generasi penerus yang beriman dan bertaqwa.</li>
                <li>2. Menolong sesama dalam bidang kesehatan sesuai dengan Trias UKS.</li>
                <li>3. Memantapkan organisasi KKR yang terdiri dari Petugas Pelaksana Usaha Kesehatan Sekolah (PP UKS), Palang Merah Remaja (PMR), Pusat Informasi Konseling Remaja (PIK-R). </li>
                <li>4. Membentuk kemandirian dan rasa kemanusiaan terhadap sesama warga SMK Negeri 1 Bantul untuk hidup bersih dan sehat.</li>
                <li>5. Meningkatkan pelayanan kesehatan secara merata.</li>
                <li>6. Menambah pengetahuan dalam bidang kesehatan dan mengamalkannya dalam kehidupan sehari-hari.  </li>
                <li>7. Meningkatkan kesehatan jasmani dan rohani serta memantapkan kehidupan bermasyarakat, berbangsa, dan bernegara.</li>
            </ol>
        </div>
    </div>
    
    <div class="swiper-container-kkr" id="gallery">
        <div class="mb-1 swiper-title wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="">Anggota</h1>
            <div class="swiper-title-line"></div>
        </div>
        <div class="swiper gallery-swiper-kkr wow fadeInUp" data-wow-delay="0.1s">
            <div class="swiper-wrapper gallery-swiper-wrapper">
                <?php while( $row = mysqli_fetch_assoc($member) ) : ?>
                    <div class="swiper-slide gallery-swiper-slide">
                        <img src="Photo/person.png" alt="" class="swiper-img gallery-swiper-img">
                        <h4><?= $row["nama"]; ?></h4>
                        <h5>Jabatan: <?= $row["jabatan"]; ?></h5>
                        <h5>Telp: <?= $row["no_hp"]; ?></h5>
                        <h6>Alamat: <?= $row["alamat"]; ?></h6>
                    </div>
                <?php endwhile; ?>
            </div>
          
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    
    <!-- Javascript -->
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            autoplay: {
            delay: 3000,
            disablOnInteraction: false,
            },
            loop: true,
    
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
            },
    
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
            });
    </script>

    <div class="inepks">
        <div class="navbarinekkr">Info & Event</div>
        <?php while( $row = mysqli_fetch_assoc($schedule) ) : ?>
		<div class="jkinekkr">
			<h2>Jadwal Kegiatan</h2>
			<p>Nama Kegiatan: <?= $row["nama_kegiatan"]; ?></p>
			<p>Waktu: <?= $row["hari"]; ?> / <?= $row["jam"]; ?></p>
			<p>Tempat: <?= $row["tempat"]; ?></p>
			<p>Pembimbing: <?= $row["pembimbing"]; ?></p>
		</div>
	    <?php endwhile; ?>
        <div class="eventinekkr">
            <h2>Event</h2>
            <?php while( $row = mysqli_fetch_assoc($event) ) : ?>
            <div class="eventinebox"> 
                <div class="imgine"><img src="photo/<?= $row["image"]; ?>" alt=""></div>
                    <div class="textine">
                        <h4><?= $row["judul"]; ?></h4>
                        <p><?= $row["isi"]; ?></p>
                    </div>
                </div>
            </div>
		    <?php endwhile; ?>
        </div>
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