<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$galeri_pra = query("SELECT * FROM galeri_pramuka");

// cek apakah tombil submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if ( addgpra($_POST) > 0 ) {
        echo "
            <script>
                alert('Data telah berhasil ditambahkan!');
                document.location.href = 'Admin Data Galeri Pramuka.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal untuk ditambahkan!');
                document.location.href = 'Admin Data Galeri Pramuka.php';
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
    <title>Data Galeri Pramuka</title>
</head>
<body>

    <a href="Index Admin.php"><img class="imgIndexAdmin" src="photo/home-icon.png"></a>

    <div class="divform">
        <h1>Tambah Data Galeri Pramuka</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image" required aria-describedby="imageHelp">
                <div id="imageHelp" class="form-text">format ( jpg, jpeg, png ) | Max size: 5mb !</div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <h1>Data Galeri Pramuka</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Action</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach( $galeri_pra as $row ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="Update Data Galeri Pramuka.php?id=<?= $row["id_glri"]; ?>">Update</a> | 
                    <a href="Delete Data Galeri Pramuka.php?id=<?= $row["id_glri"]; ?>" onclick="
                    return confirm('Apakah yakin ingin menghapus data tersebut?');">Delete</a>
                </td>
                <td><img src="photo/<?= $row["image"]; ?>" width="50"></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>