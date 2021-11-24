<?php
$title = "Properties";
require_once "./components/template/admin_header.php";
?>
<div class="container-fluid">
    <div class="row">
        <?php
        require_once "./components/template/sidebar.php";
        ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="row" style="margin: 20px;">
                <h1>Properties</h1>
            </div>

            <div class="row" style="margin: 20px;">
                <table class="table" style="text-align:center;">
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
                    include_once './functions/property.php';
                    $obj = new Property();
                    $res = $obj->getProperties();

                    if (isset($_GET['delete'])) {
                        $id = $_GET['delete'];
                        $del = $obj->deleteProperty($id);
                    }

                    if ($res->num_rows > 0) {
                        while ($row = $res->fetch_assoc()) {
                            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>" . $row['location'] . "</td><td>" . $row['lotArea'] . "</td><td>" . $row['price'] . "</td><td>" . $row['propertyType'] . "</td><td>" . "<img src='functions/images/$row[image]' height=50/>" . "</td><td>" . "<a href='property.php?update=$row[id]' class='btn btn-primary mx-2' role='button'><i class='fas fa-edit'></i></a><a href='property.php?delete=$row[id]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                        }
                    } else {
                        echo "No results";
                    }
                    ?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php
require_once './components/template/footer.php';
?>