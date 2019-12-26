<?php
    // Database Variables - DONT TOUCH
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPswd = "";
    $dbName = "anarchyrp";

    // Create connection to the database
    $link = mysqli_connect($dbServer, $dbUser, $dbPswd, $dbName);

    // Check connection
    if(mysqli_connect_error()) {
        die("ERROR: Couldn't connect to the database. Error: " . mysqli_connect_error());
    }
?>
