<?php
    // Connect to database
    include_once 'php/config.php';

    // Procedure
    if(isset($_POST['sendapp'])) {
        // Variables - DONT TOUCH
        $name = $_POST['fname'];
        $country = $_POST['country'];
        $timezone = $_POST['timezone'];
        $qualities = $_POST['qualities'];
        $future = $_POST['future'];
        $references = $_POST['references'];

        // Insert query
        $sql = "INSERT INTO devapps (fname, country, timezone, qualities, future, reference) VALUES ('$name', '$country', '$timezone', '$qualities', '$future', '$references')";

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
    <title>Anarchy Roleplay | Developer Application Sent!</title>
</head>
<body>
    
</body>
</html>