<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data jadwal_pramuka berdasarkan id
$jpra = query("SELECT * FROM jadwal_pramuka WHERE id_keg = $id")[0];

// cek apakah tombil submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if ( updatejpra($_POST) > 0 ) {
        echo "
            <script>
                alert('Data telah berhasil diubah!');
                document.location.href = 'Admin Data Jadwal Pramuka.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal untuk diubah!');
                document.location.href = 'Admin Data Jadwal Pramuka.php';
            </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Update Data Jadwal Kegiatan Pramuka</title>
</head>
<body>

<a href="Index Admin.php"><img class="imgIndexAdmin" src="photo/home-icon.png"></a>

<div class="divform">
        <h1>Update Data Jadwal Kegiatan Pramuka</h1>
        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $jpra["id_keg"]; ?>">
            <div class="mb-3">
                <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" required value="<?= $jpra["nama_kegiatan"]; ?>">
            </div>
            <div class="mb-3">
                <label for="hari" class="form-label">Hari</label>
                <input type="text" name="hari" class="form-control" id="hari" required value="<?= $jpra["hari"]; ?>">
            </div>
            <div class="mb-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="text" name="jam" class="form-control" id="jam" required value="<?= $jpra["jam"]; ?>">
            </div>
            <div class="mb-3">
                <label for="tempat" class="form-label">Tempat</label>
                <input type="text" name="tempat" class="form-control" id="tempat" required value="<?= $jpra["tempat"]; ?>">
            </div>
            <div class="mb-3">
                <label for="pembimbing" class="form-label">Pembimbing</label>
                <input type="text" name="pembimbing" class="form-control" id="pembimbing" required value="<?= $jpra["pembimbing"]; ?>"> 
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>