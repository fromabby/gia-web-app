<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo "Dashboard | ". $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<style>
    .invert {
        filter: invert(100%)
    }

    .navbar-brand {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: bold;
    }
</style>

<body>
    <?php
    session_start();
    if (isset($_SESSION['email'])) {
    ?>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <div class="container-fluid">
                <a class="navbar-brand" href=profile.php?view=<?php echo $_SESSION['email']; ?>>
                    <img src="../db/images/logo.png" alt="" width="22" height="20" class="d-inline-block invert align-text-top" style="margin-right: 7px; margin-top: 5px;">

                    GIA Homes Dashboard</a>
                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="../db/admin_logout.php">Sign out</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php } ?>
    <?php
    if (isset($title) && $title == "Index") {
    ?>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" style="background-color: gray">
            <div class="container">
                <h1>Welcome to HomeEscapes online estate catalogue</h1>
                <p class="lead">This site has been made using PHP with MYSQL (procedure ../db)!</p>
                <p>The layout use Bootstrap to make it more responsive. It's just a simple web!</p>
            </div>
        </div>
    <?php } ?>

    <div class="" id="main">