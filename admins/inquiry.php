<?php
$title = "Inquiry Details";
include_once './../db/inquiry.php';
require_once "../includes/admin_header.php";

if (isset($_SESSION['email'])) {
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $del = $obj->deleteInquiry($id);
        if ($del) {
            header("Location: inquiries_table.php?message=Inquiry deleted successfully.");
        } else {
            header("Location: inquiries_table.php?error=Inquiry cannot be deleted.");
        }
    }

    if (isset($_GET['id'])) {
        $singRes = $obj->getSingleInquiry($_GET['id']);
        $row = mysqli_fetch_assoc($singRes);
        $fullName = $row['fullName'];
        $email = $row['email'];
        $contactNumber = $row['contactNumber'];
        $concernType = $row['concernType'];
        $message = $row['message'];
    }
?>
    <div class="container-fluid">
        <div class="row">
            <?php
            require_once "../includes/sidebar.php";
            ?>
            <div class="card" style="width: 30rem; margin: 20px auto;">
                <div class="card-body">
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
                    <h5 class="card-title">Inquiry Details</h5>
                    <form action="" method="post">
                        <div class="form-group pb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Juan G. Dela Cruz" name="fullName" disabled value="<?php echo $fullName; ?>">
                        </div>
                        <div class="form-group pb-3">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="name@example.com" name="email" disabled value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group pb-3">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" placeholder="09xx-xxx-xxxx" name="contactNumber" disabled value="<?php echo $contactNumber; ?>">
                        </div>
                        <div class="form-group pb-3">
                            <label>Concern Type</label>
                            <select class="form-control" name="concernType" disabled value="<?php echo $concernType; ?>">
                                <option value="" <?php echo ($concernType == "") ? "selected" : "" ?>>-</option>
                                <option value="Inquiry" <?php echo ($concernType == "Inquiry") ? "selected" : "" ?>>Inquiry</option>
                                <option value="Quotation" <?php echo ($concernType == "Quotation") ? "selected" : "" ?>>Quotation</option>
                                <option value="Quotation" <?php echo ($concernType == "Book Viewing") ? "selected" : "" ?>>Book Viewing</option>
                                <option value="Others" <?php echo ($concernType == "Others") ? "selected" : "" ?>>Others</option>
                            </select>
                        </div>
                        <div class="form-group pb-3" name="message">
                            <label>Message</label>
                            <textarea class="form-control" rows="3" name="message" disabled><?php echo $message; ?></textarea>
                        </div>
                    </form>
                </div>
            </div>
            </main>
        </div>

    </div>
<?php
} else {
    header("Location: ../login.php");
    exit();
}
?>