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

    // Discord webhook
    $webhook = "https://discordapp.com/api/webhooks/664186711428825120/Qy7dnyt3d5JlNWyNghpD7bhubqo-PNTJNKomgMrp39blqvm32XKZv_0Adwz8IH1kBCbA";
    $msg = "**Ny staff ansøgning!**\n**Navn:** $name\n**";

    $json_data = array('content'=>"$msg");
    $make_json = json_encode($json_data);

    $ch = curl_init( $webhook );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec( $ch );

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