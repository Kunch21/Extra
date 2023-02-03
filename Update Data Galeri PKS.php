<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data galeri_pks berdasarkan id
$gpks = query("SELECT * FROM galeri_pks WHERE id_glri = $id")[0];

// cek apakah tombil submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if ( updategpks($_POST) > 0 ) {
        echo "
            <script>
                alert('Data telah berhasil diubah!');
                document.location.href = 'Admin Data Galeri PKS.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal untuk diubah!');
                document.location.href = 'Admin Data Galeri PKS.php';
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
    <title>Data Galeri PKS</title>
</head>
<body>

    <a href="Index Admin.php"><img class="imgIndexAdmin" src="photo/home-icon.png"></a>

    <div class="divform">
        <h1>Update Data Galeri PKS</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $gpks["id_glri"]; ?>">
            <input type="hidden" name="oldimage" value="<?= $gpks["image"]; ?>">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <img src="photo/<?= $gpks["image"]; ?>" width="50">
                <input type="file" name="image" class="form-control" id="image" aria-describedby="imageHelp">
                <div id="imageHelp" class="form-text">format ( jpg, jpeg, png ) | Max size: 5mb !</div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>