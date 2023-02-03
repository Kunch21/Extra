<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>

    <a href="Index.php"><img class="imgIndexAdmin" src="photo/7963fd134a319515ae2933b360d167b0.png"></a>

    <div class="admintitle">
	    <h4 class="admintitle1">Admin Page</h4>
        <div class="admintitleline"></div>
    </div>

    <div class="greeting">
        <h2>Welcome Back Admin!</h2>
    </div>

    

    <div class="divadmin">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="divpksadmin">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PKS
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Admin Data Pengurus PKS.php">Data Pengurus/Anggota</a></li>
                                <li><a class="dropdown-item" href="Admin Data Pembimbing PKS.php">Data Pembimbing</a></li>
                                <li><a class="dropdown-item" href="Admin Data Jadwal PKS.php">Data Jadwal Kegiatan</a></li>
                                <li><a class="dropdown-item" href="Admin Data Event PKS.php">Data Event</a></li>
                                <li><a class="dropdown-item" href="Admin Data Prestasi PKS.php">Data Prestasi</a></li>
                                <li><a class="dropdown-item" href="Admin Data Galeri PKS.php">Data Galeri</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="divkkradmin">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                KKR
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Admin Data Pengurus KKR.php">Data Pengurus/Anggota</a></li>
                                <li><a class="dropdown-item" href="Admin Data Pembimbing KKR.php">Data Pembimbing</a></li>
                                <li><a class="dropdown-item" href="Admin Data Jadwal KKR.php">Data Jadwal Kegiatan</a></li>
                                <li><a class="dropdown-item" href="Admin Data Event KKR.php">Data Event</a></li>
                                <li><a class="dropdown-item" href="Admin Data Prestasi KKR.php">Data Prestasi</a></li>
                                <li><a class="dropdown-item" href="Admin Data Galeri KKR.php">Data Galeri</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="divpraadmin">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PRAMUKA
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Admin Data Pengurus Pramuka.php">Data Pengurus/Anggota</a></li>
                                <li><a class="dropdown-item" href="Admin Data Pembimbing Pramuka.php">Data Pembimbing</a></li>
                                <li><a class="dropdown-item" href="Admin Data Jadwal Pramuka.php">Data Jadwal Kegiatan</a></li>
                                <li><a class="dropdown-item" href="Admin Data Event Pramuka.php">Data Event</a></li>
                                <li><a class="dropdown-item" href="Admin Data Prestasi Pramuka.php">Data Prestasi</a></li>
                                <li><a class="dropdown-item" href="Admin Data Galeri Pramuka.php">Data Galeri</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="botomButton">
        <a class="btn btn-primary" href="logout.php" role="button">Logout</a>
        <a class="btn btn-primary" href="Registration.php" role="button">New User</a>
    </div>

</body>
</html>