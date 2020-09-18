<?php
#*********************************************************************************
#
#Database
#Name       Date          Description
#Logan      9/11/2020     Added database
#
#*********************************************************************************
    $dsn = 'mysql:host=localhost;dbname=lmportfolio';
    $username = 'lm_user';
    $password = 'Pa$$w0rd';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>