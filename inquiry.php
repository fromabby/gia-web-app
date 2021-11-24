<?php
include_once './functions/inquiry.php';
require_once "./components/template/admin_header.php";

if (isset($_SESSION['username'])) {
    $obj = new Inquiry();
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $del = $obj->deleteInquiry($id);
        if ($del) {
            header("Location: inquiries_table.php");
        } else {
            echo "Error";
        }
    }

    if (isset($_GET['id'])) {
        $title = "Inquiry Details";
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
            require_once "./components/template/sidebar.php";
            ?>

            <div class="card" style="width: 30rem; margin: 20px auto;">
                <div class="card-body">
                    <h5 class="card-title">Inquiry Details</h5>
                    <?php
                    if (isset($_GET['message'])) {
                    ?>
                        <p class="message"><?php echo $_GET['message']; ?></p>
                    <?php } ?>
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
                                <option value="">-</option>
                                <option value="Inquiry">Inquiry</option>
                                <option value="Quotation">Quotation</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group pb-3" name="message">
                            <label>Message</label>
                            <textarea class="form-control" rows="3" name="message" disabled value="<?php echo $message; ?>"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            </main>
        </div>

    </div>
<?php
} else {
    header("Location: login.php");
    exit();
}
?>