<?php 
session_start();
if(isset($_SESSION['session_username'])){
	header("location:loginweb.php");
	exit();

}
print_r($_SESSION);
print_r($_COOKIE);



?>