<?php
    $server = '127.0.0.1';
    $user = "root";
    $pass = "";
    $dbName = "mhp";

    $conn = mysqli_connect($server, $user, $pass);
    if(!$conn):
        die(mysqli_error($conn)) . "invalid Connection";
    endif;
    $selectDb = mysqli_select_db($conn, $dbName);
    if(!$selectDb):
        die(mysqli_error($conn)) . "Wrong Database Selection";
    endif;
    session_start();
?>