<?php
$title = "Property";
require_once "./includes/header.php";
include_once "./db/property.php";

if (isset($_GET['id'])) {
    $singRes = $obj->displaySingleProperty($_GET['id']);

    $row = mysqli_fetch_assoc($singRes);
    $name = $row['name'];
    $description = $row['description'];
    $location = $row['location'];
    $lotArea = $row['lotArea'];
    $price = $row['price'];
    $propertyType = $row['propertyType'];
    $image = $row['image'];

    $results = $obj->getPropertiesOther($_GET['id']);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/stylesProperty.css" rel="stylesheet">

    </head>

    <body>
        <?php
        if (isset($_GET['message'])) {
        ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['message']; ?>
            </div>
        <?php } ?>
        <?php
        if (isset($_GET['error'])) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
        <?php } else { ?>
            <!-- Product section-->
            <section class="py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="row gx-4 gx-lg-5 align-items-center">
                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./db/images/<?php echo $image; ?>" alt="<?php echo $image; ?>" /></div>
                        <div class="col-md-6">
                            <h1 class="display-5 fw-bolder"><?php echo $name; ?></h1>
                            <div class="fs-5 mb-5">
                                <h2>₱<?php echo $price; ?></h2>
                                <p style="font-size: 16px">Lot Area (sqm): <?php echo $lotArea; ?></p>
                                <p style="font-size: 16px">Location: <?php echo $location; ?></p>
                            </div>
                            <p class="lead" style="font-size: 16px"><?php echo $description; ?></p>
                            <div class="d-flex">
                                <a href="./contactus.php?description=<?php
                                    echo "I would like to book a viewing for " . $name
                                ?>&type=Book Viewing">
                                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                        Book a Viewing
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Related items section-->
            <section class="py-5 bg-light">
                <div class="container px-4 px-lg-5 mt-5">
                    <h2 class="fw-bolder mb-4">Related Properties</h2>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <?php
                        $i = 4;
                        foreach ($results as $otherProp) {
                        ?>
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="./db/images/<?php echo $otherProp['image']; ?>" alt="<?php $otherProp['image']; ?>" height="150" />
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder"><?php echo $otherProp['name']; ?></h5>
                                            ₱ <?php echo $otherProp['price']; ?>
                                        </div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="property.php?id=<?php echo $otherProp['id']; ?>"><i class="bi-house-fill me-1"></i>View Property</a></div>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $i -= 1;
                            if ($i == 0) {
                                break;
                            }
                        }
                    } ?>
                    </div>
                </div>
            </section>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="./../assets/js/scripts.js"></script>
    </body>

    </html>
<?php
}
require_once "./includes/footer.php";
?>