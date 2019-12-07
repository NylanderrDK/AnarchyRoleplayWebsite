<?php
    // Database Variables - DONT TOUCH
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPswd = "9500Hobro";
    $dbName = "anarchyrp";

    // Create connection to the database
    $link = mysqli_connect($dbServer, $dbUser, $dbPswd, $dbName);

    // Check connection
    if($link == false) {
        die("ERROR: Couldn't connect to the database. Error: " . mysqli_connect_error());
    }
?>