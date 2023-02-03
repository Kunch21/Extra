<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$prestasi_kkr = query("SELECT * FROM prestasi_kkr");

// cek apakah tombil submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if ( addpreskkr($_POST) > 0 ) {
        echo "
            <script>
                alert('Data telah berhasil ditambahkan!');
                document.location.href = 'Admin Data Prestasi KKR.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal untuk ditambahkan!');
                document.location.href = 'Admin Data Prestasi KKR.php';
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
    <title>Data Prestasi KKR</title>
</head>
<body>

    <a href="Index Admin.php"><img class="imgIndexAdmin" src="photo/home-icon.png"></a>

    <div class="divform">
        <h1>Tambah Data Prestasi KKR</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="prestasi" class="form-label">Prestasi</label>
                <input type="text" name="prestasi" class="form-control" id="prestasi" required>
            </div>
            <div class="mb-3">
                <label for="tingkat" class="form-label">Tingkat</label>
                <input type="text" name="tingkat" class="form-control" id="tingkat" required>
            </div>
            <div class="mb-3">
                <label for="juara" class="form-label">Juara</label>
                <input type="text" name="juara" class="form-control" id="juara" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" name="tanggal" class="form-control" id="tanggal" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image" required aria-describedby="imageHelp">
                <div id="imageHelp" class="form-text">format ( jpg, jpeg, png ) | Max size: 5mb !</div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <h1>Data Prestasi KKR</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Action</th>
                <th>Prestasi</th>
                <th>Tingkat</th>
                <th>Juara</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach( $prestasi_kkr as $row ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="Update Data Prestasi KKR.php?id=<?= $row["id_pres"]; ?>">Update</a> | 
                    <a href="Delete Data Prestasi KKR.php?id=<?= $row["id_pres"]; ?>" onclick="
                    return confirm('Apakah yakin ingin menghapus data tersebut?');">Delete</a>
                </td>
                <td><?= $row["prestasi"]; ?></td>
                <td><?= $row["tingkat"]; ?></td>
                <td><?= $row["juara"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>
                <td><?= $row["tanggal"]; ?></td>
                <td><img src="photo/<?= $row["image"]; ?>" width="50"></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>