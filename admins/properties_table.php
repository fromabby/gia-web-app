<?php
$title = "Properties";
require_once "../includes/admin_header.php";

if (isset($_SESSION['email'])) {
?>
    <style>
        h4 {
            padding-bottom: 14px;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <?php
            require_once "../includes/sidebar.php";
            ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
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
                <div class="row" style="margin: 20px;">
                    <h1>Properties</h1>
                </div>
                

                <div class="row" style="margin: 20px;">

                    <form action="" method="POST">
                        <input type="text" name="id" placeholder="Enter ID" required value="<?php if (isset($_POST['id'])) {
                                                                                                echo $_POST['id'];
                                                                                            } ?>" />
                        <input type="submit" name="search" value="Search">
                        <input type="submit" name="reset" value="Reset">
                    </form>
                    <table class="table table-hover table-bordered" style="text-align:center;">
                        <tr>
                            <th>ID</th>
                            <th>Property Name</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Lot Area</th>
                            <th>Price</th>
                            <th>Property type</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                        include_once './../db/property.php';
                        $res = $obj->getProperties();

                        if (isset($_POST['search'])) {
                            $id = $_POST['id'];
                            $res = $obj->getSingleProperty($id);

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>" . $row['location'] . "</td><td>" . $row['lotArea'] . "</td><td>" . $row['price'] . "</td><td>" . $row['propertyType'] . "</td><td>" . "<img src='../db/images/$row[image]' height=50/>" . "</td><td>" . "<a href='property.php?update=$row[id]' class='btn btn-primary mx-2' role='button'><i class='fas fa-edit'></i></a><a href='property.php?delete=$row[id]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                                }
                            } else {
                                echo "No results";
                            }
                        } elseif (isset($_POST['reset'])) {
                            $res = $obj->getProperties();

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>" . $row['location'] . "</td><td>" . $row['lotArea'] . "</td><td>" . $row['price'] . "</td><td>" . $row['propertyType'] . "</td><td>" . "<img src='../db/images/$row[image]' height=50/>" . "</td><td>" . "<a href='property.php?update=$row[id]' class='btn btn-primary mx-2' role='button'><i class='fas fa-edit'></i></a><a href='property.php?delete=$row[id]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                                }
                            } else {
                                echo "No results";
                            }
                        } else {
                            $_POST = array();
                            $res = $obj->getProperties();

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>" . $row['location'] . "</td><td>" . $row['lotArea'] . "</td><td>" . $row['price'] . "</td><td>" . $row['propertyType'] . "</td><td>" . "<img src='../db/images/$row[image]' height=50/>" . "</td><td>" . "<a href='property.php?update=$row[id]' class='btn btn-primary mx-2' role='button'><i class='fas fa-edit'></i></a><a href='property.php?delete=$row[id]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                                }
                            } else {
                                echo "No results";
                            }
                        }
                        ?>
                    </table>
            </main>
        </div>
    </div>
<?php
} else {
    header("Location: ../login.php");
    exit();
}
?>