<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data prestasi_pks berdasarkan id
$prespks = query("SELECT * FROM prestasi_pks WHERE id_pres = $id")[0];

// cek apakah tombil submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if ( updateprespks($_POST) > 0 ) {
        echo "
            <script>
                alert('Data telah berhasil diubah!');
                document.location.href = 'Admin Data Prestasi PKS.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal untuk diubah!');
                document.location.href = 'Admin Data Prestasi PKS.php';
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
    <title>Data Prestasi PKS</title>
</head>
<body>

    <a href="Index Admin.php"><img class="imgIndexAdmin" src="photo/home-icon.png"></a>

    <div class="divform">
        <h1>Update Data Prestasi PKS</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $prespks["id_pres"]; ?>">
            <input type="hidden" name="oldimage" value="<?= $prespks["image"]; ?>">
            <div class="mb-3">
                <label for="prestasi" class="form-label">Prestasi</label>
                <input type="text" name="prestasi" class="form-control" id="prestasi" required value="<?= $prespks["prestasi"]; ?>">
            </div>
            <div class="mb-3">
                <label for="tingkat" class="form-label">Tingkat</label>
                <input type="text" name="tingkat" class="form-control" id="tingkat" required value="<?= $prespks["tingkat"]; ?>">
            </div>
            <div class="mb-3">
                <label for="juara" class="form-label">Juara</label>
                <input type="text" name="juara" class="form-control" id="juara" required value="<?= $prespks["juara"]; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" required value="<?= $prespks["deskripsi"]; ?>">
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" name="tanggal" class="form-control" id="tanggal" required value="<?= $prespks["tanggal"]; ?>">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <img src="photo/<?= $prespks["image"]; ?>" width="50">
                <input type="file" name="image" class="form-control" id="image" aria-describedby="imageHelp">
                <div id="imageHelp" class="form-text">format ( jpg, jpeg, png ) | Max size: 5mb !</div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>