<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

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

        footer {
            margin-top: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">HomeEscapes</a>
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
                    if (isset($_SESSION['username'])) {
                ?>
                    <ul class="navbar-nav mb-lg-0 d-flex">
                        <li class="d-flex nav-item"><a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a></li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-nav mb-lg-0 d-flex">
                        <li class="d-flex nav-item"><a class="nav-link active" aria-current="page" href="login.php">Log in</a></li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </nav>

    <?php
    if (isset($title) && $title == "Index") {
    ?>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" style="background-color: gray">
            <div class="container">
                <h1>Welcome to HomeEscapes online estate catalogue</h1>
                <p class="lead">This site has been made using PHP with MYSQL (procedure functions)!</p>
                <p>The layout use Bootstrap to make it more responsive. It's just a simple web!</p>
            </div>
        </div>
    <?php } ?>

    <div class="" id="main">