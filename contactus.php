<?php
$title = "Contact Us";
require_once "./includes/header.php";

$success = "Sent successfully!";
$error = "There was an error. Please try again.";

if (isset($_POST["submit"])) {
    include_once './db/inquiry.php';
    $res = $obj->contactUs($_POST);
    if ($res == true) {
        header("Location: contactus.php?message=$success");
    } else {
        header("Location: contactus.php?error=$error");
    }
}
?>

<style>
    .rectangle {
        background-color: #040B1C;
        height: 5px;
        width: auto;
    }

    .card-header {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
        background-color: #c8d8ff;
    }

    label {
        font-weight: bold;
    }

    .home-btn {
        background-color: #040B1C;
        color: white;
        border-radius: 50px;
        padding: 5px 30px 5px 30px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 70px;
        color: white;
        background-color: #212529;
        text-align: center;

    }

    .textFooter {
        padding-top: 20px;
        align-items: flex-end;
        color: white;

    }
</style>


<div class="rectangle"></div>
<div class="card shadow" style="width: 30rem; margin: 20px auto; margin-top: 35px; margin-bottom: 100px;">
    <div class="card-body" style="margin-bottom: 20px;">
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
        <h4 class="card-header">Contact Us</h4>
        <form action="" method="post">
            <div class="form-group pb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Juan G. Dela Cruz" name="fullName">
            </div>
            <div class="form-group pb-3">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="name@example.com" name="email">
            </div>
            <div class="form-group pb-3">
                <label>Contact Number</label>
                <input type="text" class="form-control" placeholder="09xx-xxx-xxxx" name="contactNumber">
            </div>
            <div class="form-group pb-3">
                <label>Concern Type</label>
                <select class="form-control" name="concernType">
                    <?php $type = isset($_GET['type']) ? $_GET['type'] : '';?>
                    <option value="" <?php echo ($type == '') ? "selected" : "";?>>-</option>
                    <option value="Inquiry" <?php echo ($type == 'Inquiry') ? "selected" : "";?>>Inquiry</option>
                    <option value="Quotation" <?php echo ($type == 'Quotation') ? "selected" : ""; ?>>Quotation</option>
                    <option value="Book Viewing" <?php echo ($type == 'Book Viewing') ? "selected" : ""; ?>>Book Viewing</option>
                    <option value="Others" <?php echo ($type == 'Others') ? "selected" : "";?>>Others</option>
                </select>
            </div>
            <div class="form-group pb-3" name="message">
                <label>Message</label>
                <textarea class="form-control" rows="3" name="message"><?php
                                                                        $description = isset($_GET['description']) ? $_GET['description'] : '';
                                                                        echo $description;
                                                                        ?></textarea>
            </div>
            <center><input type="submit" class="btn shadow home-btn" name="submit" value="Submit" /></center>
        </form>
    </div>
</div>

<?php
require_once "./includes/footer.php";
?>