<?php
    // Connect to database
    include_once 'php/config.php';

    // Procedure
    if(isset($_POST['sendapp'])) {
        // Variables - DONT TOUCH
        $name = $_POST['fname'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        $timezone = $_POST['timezone'];
        $steamid = $_POST['steamid'];
        $howlong = $_POST['howlong'];
        $why = $_POST['why'];
        $what = $_POST['what'];
        $microphone = $_POST['microphone'];
        $references = $_POST['references'];

        // Insert query
        $sql = "INSERT INTO staffapps (fname, country, timezone, reference, steamid, howlong, why, what, microphone) VALUES ('$name', '$country', '$timezone', '$references', '$steamid', '$howlong', '$why', '$what', '$microphone')";

        if (mysqli_query($link, $sql)) {
            echo "<script type='text/javascript'>alert('Your application has been sent!');</script>";
        } else {
            echo "ERROR: " . $sql . "" . mysqli_error($conn);
        }
    }

    // Close connection
    mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="3; url = http://anarchyroleplay.com">
    <title>Anarchy Roleplay | Staff Application Sent!</title>
</head>
<body>
    
</body>
</html>