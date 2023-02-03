<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

if( deletegpks($id) > 0 ) {
    echo "
        <script>
            alert('Data telah berhasil dihapus!');
            document.location.href = 'Admin Data Galeri PKS.php';
        </script>
    ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'Admin Data Galeri PKS.php';
            </script>
        ";
    }

?>