<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$jadwal_kkr = query("SELECT * FROM jadwal_kkr");

// cek apakah tombil submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if ( addjkkr($_POST) > 0 ) {
        echo "
            <script>
                alert('Data telah berhasil ditambahkan!');
                document.location.href = 'Admin Data Jadwal KKR.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal untuk ditambahkan!');
                document.location.href = 'Admin Data Jadwal KKR.php';
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
    <title>Data Jadwal Kegiatan KKR</title>
</head>
<body>

    <a href="Index Admin.php"><img class="imgIndexAdmin" src="photo/home-icon.png"></a>

    <div class="divform">
        <h1>Tambah Data Jadwal Kegiatan KKR</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" required>
            </div>
            <div class="mb-3">
                <label for="hari" class="form-label">Hari</label>
                <input type="text" name="hari" class="form-control" id="hari" required>
            </div>
            <div class="mb-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="text" name="jam" class="form-control" id="jam" required>
            </div>
            <div class="mb-3">
                <label for="tempat" class="form-label">Tempat</label>
                <input type="text" name="tempat" class="form-control" id="tempat" required>
            </div>
            <div class="mb-3">
                <label for="pembimbing" class="form-label">Pembimbing</label>
                <input type="text" name="pembimbing" class="form-control" id="pembimbing" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <h1>Data Jadwal Kegiatan KKR</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Action</th>
                <th>Nama Kegiatan</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Tempat</th>
                <th>Pembimbing</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach( $jadwal_kkr as $row ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="Update Data Jadwal KKR.php?id=<?= $row["id_keg"]; ?>">Update</a> | 
                    <a href="Delete Data Jadwal KKR.php?id=<?= $row["id_keg"]; ?>" onclick="
                    return confirm('Apakah yakin ingin menghapus data tersebut?');">Delete</a>
                </td>
                <td><?= $row["nama_kegiatan"]; ?></td>
                <td><?= $row["hari"]; ?></td>
                <td><?= $row["jam"]; ?></td>
                <td><?= $row["tempat"]; ?></td>
                <td><?= $row["pembimbing"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>