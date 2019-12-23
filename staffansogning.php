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
                        <a class="nav-link" href="index.php">Forside</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Information
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="regler.php">Regler</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="privatliv.php">Privatlivspolitik</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="donation.php" class="nav-link">Donationer</a>
                    </li>
                    <li class="nav-item active">
                        <a href="ansogninger.php" class="nav-link">Ansøgninger</a>
                    </li>
                </ul>
                <a href="discord.php">
                    <button class="btn btn-danger my-2 my-sm-0 redbtn">Discord</button>
                </a>
                <a href="fivem://connect/anarchyroleplay.com">
                    <button class="btn btn-danger my-2 my-sm-0 redbtn" style="margin-left: 10px;">Tilslut</button>
                </a>
            </div>
        </div>  
    </nav>

    <h1 class="text-center" style="margin-top: 20px; color: white;">Staff Ansøgning</h1>

    <!-- Application form -->
    <div class="container">
        <div class="row justify-content-center align-items-center" style="margin-top: 30px;">
            <form class="col-12" style="background-color: white;padding: 20px; border-radius: 25px;" method="POST" action="staffappsent.php">
                <div class="form-group">
                    <label for="fname">Dit Fulde Navn</label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="age">Din Alder</label>
                    <input type="text" name="age" id="age" class="form-control" placeholder="17 år" required>
                </div>
                <div class="form-group">
                    <label for="country">Dit Land</label>
                    <input type="text" name="country" id="country" class="form-control" placeholder="Danmark" required>
                </div>
                <div class="form-group">
                    <label for="timezone">Din Tidszone</label>
                    <input type="text" name="timezone" id="timezone" class="form-control" placeholder="EST" required>
                </div>
                <div class="form-group">
                    <label for="steamid">Dit Steam64 ID</label>
                    <input type="text" name="steamid" id="steamid" class="form-control" placeholder="76561198267876408" required>
                </div>
                <div class="form-group">
                    <label for="howlong">Hvor lang tid har du spillet på Anarchy Roleplay?</label>
                    <input type="text" name="howlong" id="howlong" class="form-control" placeholder="Jeg har spillet på serveren i 3 måneder." required>
                </div>
                <div class="form-group">
                    <label for="why">Hvorfor vil du gerne blive en del af staff teamet?</label>
                    <textarea class="form-control" id="why" name="why" rows="3" placeholder="Uddyb dit svar.." required></textarea>
                </div>
                <div class="form-group">
                    <label for="what">Hvilke kvalifikationer kan du medbringe til staff teamet?</label>
                    <textarea class="form-control" id="what" name="what" rows="3" placeholder="Uddyb dit svar.." required></textarea>
                </div>
                <div class="form-group">
                    <label for="microphone">Har du en fungerende mikrofon?</label>
                    <select class="form-control" id="microphone" name="microphone" required>
                        <option>Ja</option>
                        <option>Nej</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="references">Er du blevet henvist af en fra ansættelses teamet?</label>
                    <input type="text" name="references" id="references" class="form-control" placeholder="Ja, Zhag." required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary justify-content-center" id="sendapp" name="sendapp">Send Ansøgning</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="text-center center-block text-white" style="margin-top: 25px;">
        <p class="txt-railway">Copyright &copy; | Anarchyroleplay.com</p>
    </div>    

    <!-- Import Custom & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>