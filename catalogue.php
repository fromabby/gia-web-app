<?php
$title = "Catalogue";
require_once "./includes/header.php";
require_once "./carousel.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
include_once "./db/property.php";
//object create

//store list of properties in variable
$listProperty = $obj->getProperties();
if($listProperty->num_rows > 0) {
?>

<body>
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
            <center><h2 style="padding-bottom: 50px;">Properties</h2></center>
                <div class="row">
                    <?php
                    foreach ($listProperty as $item) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="./db/images/<?php echo $item['image']; ?>" alt="<?php echo $item['image']; ?>" height="200">
                                <div class="fw-bolder" style="padding: 5px 0px 0px 13px"><h5><?php echo $item['name'] ?></h5></div>
                                <div class="card-body" style="padding-top: 0px">
                                    <p class="card-text"  style="font-size: 15px;"><?php echo $item['description'] ?></p>
                                    <p class="card-text" style="font-size: 12px; color: gray;">Location: <?php echo $item['location'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="property.php?id=<?php echo $item['id'] ?>" class='btn btn-success mx-2' role='button'>View</a>
                                        </div>
                                        <small class="text-muted"><?php echo $item['propertyType'] ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/holder.min.js"></script>
</body>

</html>
<?php
} else {
?>
<body>
    <main role="main">
        
    </main>
    <div class="alert alert-danger" role="alert">
        No properties to be displayed.
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/holder.min.js"></script>
</body>
<?php }?>
<?php
require_once "./includes/footer.php";
?>