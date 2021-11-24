<?php
$title = "Inquiries";
require_once "./components/template/admin_header.php";

if (isset($_SESSION['username'])) {
?>

    <div class="container-fluid">
        <div class="row">
            <?php
            require_once "./components/template/sidebar.php";
            ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="row" style="margin: 20px;">
                    <h1>Inquiries</h1>
                </div>
                <div class="row" style="margin: 20px;">

                    <form action="" method="POST">
                        <input type="text" name="id" placeholder="Enter ID" required value="<?php if (isset($_POST['id'])) { echo $_POST['id']; }?>" />
                        <input type="submit" name="search" value="Search">
                        <input type="submit" name="reset" value="Reset">
                    </form>
                    <table class="table" style="text-align:center;">
                        <tr>
                            <th>ID</th>
                            <th>Date Created</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Concern Type</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                        include_once './functions/inquiry.php';
                        $obj = new Inquiry();
                        if (isset($_POST['search'])) {
                            $inquiryId = $_POST['id'];
                            $res = $obj->getSingleInquiry($inquiryId);

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr><td>" . $row['inquiryId'] . "</td><td>" . $row['dateCreated'] . "</td><td>" . $row['fullName'] . "</td><td>" . $row['email'] . "</td><td>" . $row['concernType'] . "</td><td>" . "<a href='inquiry.php?id=$row[inquiryId]' class='btn btn-primary mx-2' role='button'><i class='fas fa-eye'></i></a>" . "<a href='inquiry.php?delete=$row[inquiryId]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                                }
                            } else {
                                echo "No search results";
                            }
                        } elseif (isset($_POST['reset'])) {
                            $res = $obj->getInquiries();

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr><td>" . $row['inquiryId'] . "</td><td>" . $row['dateCreated'] . "</td><td>" . $row['fullName'] . "</td><td>" . $row['email'] . "</td><td>" . $row['concernType'] . "</td><td>" . "<a href='inquiry.php?id=$row[inquiryId]' class='btn btn-primary mx-2' role='button'><i class='fas fa-eye'></i></a>" . "<a href='inquiry.php?delete=$row[inquiryId]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                                }
                            } else {
                                echo "No results";
                            }
                        } else {
                            $_POST = array();
                            $res = $obj->getInquiries();

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr><td>" . $row['inquiryId'] . "</td><td>" . $row['dateCreated'] . "</td><td>" . $row['fullName'] . "</td><td>" . $row['email'] . "</td><td>" . $row['concernType'] . "</td><td>" . "<a href='inquiry.php?id=$row[inquiryId]' class='btn btn-primary mx-2' role='button'><i class='fas fa-eye'></i></a>" . "<a href='inquiry.php?delete=$row[inquiryId]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                                }
                            } else {
                                echo "No results";
                            }
                        }
                        ?>
                    </table>
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