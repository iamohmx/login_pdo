<?php 

session_start();

    if(!isset($_SESSION['director'])) {
        header("location: ./index.php");
    }
    echo $_SESSION['username'];
    echo $_SESSION['role'];




?>