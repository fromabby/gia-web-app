<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo "GIA Homes | ". $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <style>
        html,
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        .navbar-brand {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

            font-weight: bold;
        }

        .nav-link {
            font-weight: bold;
        }


        .login {
            border: 1px black solid;
            padding: 5px 30px 5px 30px;
            border-radius: 50px;
            font-size: 90%;
        }

        .dashboard {
            border: 1px #343A40 solid;
            padding: 5px 30px 5px 30px;
            border-radius: 50px;
            font-size: 90%;
            color: #fff;
            background-color: #343A40;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <img src="functions/images/logo.png" alt="" width="22" height="20" class="d-inline-block align-text-top" style="margin-right: 10px">
            <a class="navbar-brand" href="home.php">GIA Homes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="catalogue.php">Catalogue</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="contactus.php">Contact Us</a></li>
                </ul>
                <?php
                session_start();
                if (isset($_SESSION['email'])) {
                ?>
                    <ul class="navbar-nav mb-lg-0 d-flex">
                        <li class="d-flex nav-item"><a class="nav-link dashboard active" aria-current="page" href="dashboard.php" style="color: white;">Dashboard</a></li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-nav mb-lg-0 d-flex">
                        <li class="d-flex nav-item"><a class="nav-link login active" aria-current="page" href="login.php">Log in</a></li>
                    </ul>
                <?php } ?>
            </div>
        </div>
        <hr>
    </nav>

    <div class="" id="main">