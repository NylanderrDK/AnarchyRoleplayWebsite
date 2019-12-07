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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Information
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="rules.php">Rules</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="privacy.php">Privacy Policy</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="donation.php" class="nav-link">Donation</a>
                    </li>
                    <li class="nav-item active">
                        <a href="applications.php" class="nav-link">Applications</a>
                    </li>
                </ul>
                <a href="discord.php">
                    <button class="btn btn-danger my-2 my-sm-0 redbtn">Discord</button>
                </a>
                <a href="fivem://connect/anarchyroleplay.com">
                    <button class="btn btn-danger my-2 my-sm-0 redbtn" style="margin-left: 10px;">Connect</button>
                </a>
            </div>
        </div>  
    </nav>

    <h1 class="text-center" style="margin-top: 20px; color: white;">Developer Application</h1>

    <!-- Application form -->
    <div class="container h-100">
        <div class="row justify-content-center align-items-center" style="margin-top: 30px;">
            <form class="col-12" style="background-color: white;padding: 20px; border-radius: 25px;">
                <div class="form-group">
                    <label for="name">Your Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="country">Your Country</label>
                    <input type="text" name="country" id="country" class="form-control" placeholder="Denmark" required>
                </div>
                <div class="form-group">
                    <label for="timezone">Your Timezone</label>
                    <input type="text" name="timezone" id="timezone" class="form-control" placeholder="EST" required>
                </div>
                <div class="form-group">
                    <label for="why">Which Qualities Will You Bring To The Staff Team?</label>
                    <textarea class="form-control" id="why" name="why" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="future">What Future Do You Plan To Have At Anarchy Roleplay?</label>
                    <textarea class="form-control" id="future" name="future" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="references">References</label>
                    <input type="text" name="references" id="references" class="form-control" placeholder="References" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary justify-content-center">Send Application</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Import Custom & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>