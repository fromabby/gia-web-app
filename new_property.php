<?php
$title = "New Property";
require_once "./components/template/admin_header.php";

if (isset($_POST["submit"])) {
    include_once './functions/property.php';
    $obj = new Property();
    $res = $obj->createProperty($_POST, $_FILES);
    // path to store the uploaded image
    $target = "./functions/images/" . basename($_FILES['image']['name']);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header("Location: properties_table.php");
    } else {
        header("Location: new_property.php?error=There is an error");
    }
}
?>
<html>
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
        background-color: #45a049;
    }

    .form-container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <?php
        require_once "./components/template/sidebar.php";
        ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="container form-container">
                <h3>Create new property</h3>

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="name">Property Name</label>
                    <input type="text" id="name" name="name" placeholder="Property Name" required>

                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Write something.." style="height:200px" required></textarea>

                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" placeholder="Location" required>

                    <label for="lotArea">Lot Area</label>
                    <input type="text" id="lotArea" name="lotArea" placeholder="Lot Area" required>

                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="Price" required>

                    <label for="propertyType">Property Type</label>
                    <select id="propertyType" name="propertyType" required>
                        <option value="">-</option>
                        <option value="Condo">Condo</option>
                        <option value="TownHouse">Town House</option>
                        <option value="Mansion">Mansion</option>
                    </select>
                    <div class="form-group">
                        <label for="image">Select image attachment</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <center><input type="submit" value="Submit" name="submit"></center>
                </form>
            </div>
        </main>
    </div>
</div>
<?php
require_once './components/template/footer.php';
?>