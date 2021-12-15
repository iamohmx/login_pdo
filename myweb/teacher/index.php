<?php

    session_start();

    if (!isset($_SESSION['teacher'])) {
        header("location: ./index.php");
    }
    echo $_SESSION['username'];
    echo $_SESSION['role'];
?>