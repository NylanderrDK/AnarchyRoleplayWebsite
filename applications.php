<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anarchy Roleplay | Home</title>
    <link rel="shortcut icon" href="lib/img/favicon.png" type="image/x-icon">

    <!-- Import Custom & Bootstrap CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-image: url(lib/img/bgImg.png); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="lib/img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="Anarchy Roleplay Logo">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="information.php">Information</a>
                    </li>
                    <li class="nav-item">
                        <a href="donation.php" class="nav-link">Donation</a>
                    </li>
                    <li class="nav-item">
                        <a href="applications.php" class="nav-link">Application</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-danger my-2 my-sm-0">Discord</button>
                </form>
            </div>
        </div>  
    </nav>

    <div class="container">
        <div class="row" style="margin-top: 75px;">
            <div class="col-5 text-center" style="background-color: white; height: 200px; width: 50px; border-radius: 5px; box-shadow: 0px 3px 29px black;">
                <h2 style="margin-top: 5%;">Staff Application</h2>
                <p style="margin-top: 15px;">Do you have what it takes to become Anarchy Roleplays next staff member?</p>
                <a href="staffapplication.php">
                <button class="btn-danger btn" onclick="staffRedirect()">Apply</button>
                </a>
            </div>
            <div class="col-2">
            </div>
            <div class="col-5 text-center" style="background-color: white; height: 200px; width: 50px; border-radius: 5px; box-shadow: 0px 3px 29px black;">
                <h2 style="margin-top: 5%;">Developer Application</h2>
                <p style="margin-top: 15px;">Do you have what it takes to become Anarchy Roleplays next developer?</p>
                <a href="developerapplication.php">
                <button class="btn-danger btn">Apply</button>
                </a>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col text-center" style="background-color: white; height: 150px; width: 50px; border-radius: 5px; box-shadow: 0px 3px 29px black;">
                <h1 style="padding: 50px 0; float: left; margin-left: 50px;">Unban Application</h1>
                <a href="unbanapplication.php">
                <button class="btn-lg btn-danger" style="margin: 0; position: absolute; top: 50%; left: 85%; transform: translate(-50%, -50%); float: right; width: 150px;">Apply</button>
                </a> 
            </div>
        </div>
    </div>


    <!-- Import Custom & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>