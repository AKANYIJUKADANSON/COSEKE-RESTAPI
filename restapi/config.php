<?php
    session_start();
    // Connecting to the database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dataBaseName = 'coseke';

    $connection = mysqli_connect($host, $username, $password, $dataBaseName);

    $successMsg='<span style="color: green; margin: auto;">Registered Successfuly.</span>';
    $errorMsg = '<span style="color: red; margin: auto;" >Registration Failure !.</span>';
    $errorAccessdb = '<span style="color: yellow; margin: auto;" >Access denied.</span>';
?>