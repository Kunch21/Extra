<?php
session_start();

if ( isset($_SESSION["login"]) ) {
    header("Location: Index Admin.php");
    exit;
}

require 'functions.php';

if ( isset($_POST["login"]) ) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"]) ) {

            // set session
            $_SESSION["login"] = true;


            header("location: Index Admin.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <a href="Index.php"><img class="imgIndexAdmin" src="photo/home-icon.png"></a>

    <div class="container-loginbox">
        <div class="loginbox">
            <img src="photo/logo-smk 1.png" alt="">
            <h2 style="font-weight: bold; color: white; font-family: arial; font-size: 20px;">LOGIN</h2>
            <form action="" method="post">
                <center>
            <div class="usernamelogin">
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </div>
            <div class="passwordlogin">
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </div>
            <br>
            <?php if( isset($error) ) : ?>
                <p style="color: red; font-style: italic; text-align: center;">Username / password yang Anda masukan salah!</p>
            <?php endif; ?>
                <div class="submitlogin">
                <button type="submit" name="login">LOGIN</button>
                </div>
                </center>
            </form>
        </div>
    </div>

</body>
</html>