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
        $sql = "INSERT INTO staffapps (fname, country, timezone, qualities, future, reference) VALUES ('$name', '$country', '$timezone', '$qualities', '$future', '$references')";

        if (mysqli_query($link, $sql)) {
            echo "<script type='text/javascript'>alert('Your application has been sent!');</script>";
        } else {
            echo "ERROR: " . $sql . "" . mysqli_error($conn);
        }
    }

    // Close connection
    mysqli_close($link);
?>