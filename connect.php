<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "final_case13";

$connect = mysqli_connect($localhost, $username, $password, $database);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location:index.php");
}

?>