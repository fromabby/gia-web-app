<style>
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: hsl(158, 100%, 16%);
    }

    .form-container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .container {
        border-radius: 5px;

        margin-top: 30px;
        margin-bottom: 50px;
    }

    h4 {
        padding-bottom: 14px;
    }
</style>

<?php
if (isset($_GET['update'])) {
    $title = "Update Property";
}
if (isset($_GET['new'])) {
    $title = "Add new property";
}
;
require_once "../includes/admin_header.php";

if (isset($_SESSION['email'])) {
    if (isset($_GET['delete'])) {
        include_once './../db/property.php';
        $id = $_GET['delete'];
        $del = $obj->deleteProperty($id);
        if ($del) {
            header("Location: properties_table.php?message=Property deleted successfully.");
        } else {
            echo "Error";
        }
    }

    if (isset($_GET['update'])) {
        include_once './../db/property.php';
        $singRes = $obj->getSingleProperty();
        $row = mysqli_fetch_assoc($singRes);
        $name = $row['name'];
        $description = $row['description'];
        $location = $row['location'];
        $lotArea = $row['lotArea'];
        $price = $row['price'];
        $propertyType = $row['propertyType'];
        $image = $row['image'];

        if (isset($_POST["update"])) {
            if ($_FILES['image']['name'] !== "") {
                $res = $obj->updateProperty($_POST, $_FILES);
                // path to store the uploaded image
                $target = "./../db/images/" . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    header("Location: properties_table.php?message=Property updated successfully.");
                } else {
                    $error = "There was an error. Please try again.";
                }
            } else {
                $res = $obj->updatePropertyWithoutImage($_POST);

                header("Location: properties_table.php?message=Property updated successfully.");
            }
        }

?>
        <html>
    
        <div class="container-fluid">
            <div class="row">
                <?php
                require_once "../includes/sidebar.php";
                ?>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    <div class="container form-container">
                        <h1>Update Property</h1>
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
                        <?php } ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for="name">Property Name</label>
                            <input type="text" id="name" name="name" placeholder="Property Name" value=<?php echo $name; ?> required>

                            <label for="description">Description</label>
                            <textarea id="description" name="description" placeholder="Write something.." style="height:200px" required><?php echo $description; ?></textarea>

                            <label for="location">Location</label>
                            <input type="text" id="location" name="location" placeholder="Location" value="<?php echo $location; ?>" required>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="lotArea">Lot Area</label>
                                    <input type="text" id="lotArea" name="lotArea" placeholder="100 sqm" value=<?php echo $lotArea; ?> required>
                                </div>

                                <div class="col-md-4">
                                    <label for="price">Price</label>
                                    <input type="text" id="price" name="price" placeholder="1000000" value=<?php echo $price; ?> required>
                                </div>

                                <div class="col-md-4">
                                    <label for="propertyType">Property Type</label>
                                    <select id="propertyType" name="propertyType" required>
                                        <option value='' <?php echo ($propertyType == "") ? "selected" : "" ?>>-</option>
                                        <option value="Condo" <?php echo ($propertyType == "Condo") ? "selected" : "" ?>>Condo</option>
                                        <option value="Town House" <?php echo ($propertyType == "Town House") ? "selected" : "" ?>>Town House</option>
                                        <option value="Mansion" <?php echo ($propertyType == "Mansion") ? "selected" : "" ?>>Mansion</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label for="image">Select image attachment</label>
                                    </div>
                                    <div>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                    </div>
                                    <div>
                                        <img src=<?php echo "../db/images/$row[image]"; ?> height=100 class="my-2" />
                                    </div>
                                </div>
                                <center><input type="submit" value="Update" name="update"></center>
                        </form>
                    </div>
                </main>
            </div>
        </div>

        </html>
    <?php
    }

    if (isset($_GET['new'])) {
        if (isset($_POST["submit"])) {
            include_once './../db/property.php';

            $res = $obj->createProperty($_POST, $_FILES);
            // echo "console.log($res)";
            // echo "console.log('sent to db')";
            // // path to store the uploaded image
            $target = "./../db/images/" . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && $res == true) {
                header("Location: properties_table.php?message=Property created successfully.");
            } else {
                header("Location: property.php?error=There was an error. Cannot create new property.");
            }
        }
    ?>

        <div class=" container-fluid">
            <div class="row">
                <?php
                require_once "../includes/sidebar.php";
                ?>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    <div class="container shadow form-container">
                        <h4>Create new property</h4>
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
                        <?php } ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for="name">Property Name</label>
                            <input type="text" id="name" name="name" placeholder="Property Name" required>

                            <label for="description">Description</label>
                            <textarea id="description" name="description" placeholder="Write something.." style="height:200px" required></textarea>

                            <label for="location">Location</label>
                            <input type="text" id="location" name="location" placeholder="Location" required>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="lotArea">Lot Area</label>
                                    <input type="text" id="lotArea" name="lotArea" placeholder="100 sqm" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="price">Price</label>
                                    <input type="text" id="price" name="price" placeholder="1000000" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="propertyType">Property Type</label>
                                    <select id="propertyType" name="propertyType" required>
                                        <option value=''>-</option>
                                        <option value="Condo">Condo</option>
                                        <option value="Town House">Town House</option>
                                        <option value="Mansion">Mansion</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label for="image">Select image attachment</label>
                                    </div>
                                    <div>
                                        <input type="file" class="form-control-file" id="image" name="image" required>
                                    </div>
                                </div>
                                <center><input type="submit" value="Submit" name="submit"></center>
                        </form>
                    </div>
                </main>
            </div>
        </div>
<?php
    }
} else {
    header("Location: ../login.php");
    exit();
}
?>