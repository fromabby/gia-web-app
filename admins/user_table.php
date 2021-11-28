<?php
$title = "Users";
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
                <div class="row" style="margin: 20px;">
                    <h1>Users</h1>
                </div>

                <div class="row" style="margin: 20px;">

                    <form action="" method="POST">
                        <input type="text" name="email" placeholder="Enter email" required value="<?php if (isset($_POST['email'])) {
                                                                                                echo $_POST['email'];
                                                                                            } ?>" />
                        <input type="submit" name="search" value="Search">
                        <input type="submit" name="reset" value="Reset">
                    </form>
                    <table class="table table-hover table-bordered" style="text-align:center; margin-top:20px;">
                        <tr>
                            <th>Email</th>
                            <th>Full Name</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                        include_once './../db/auth.php';
                        $obj = new User();
                        $res = $obj->getUsers();

                        if (isset($_POST['search'])) {
                            $email = $_POST['email'];
                            $res = $obj->getSingleUser($email);

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr><td>" . $row['email'] . "</td><td>" . $row['firstName'] . " " . $row['lastName'] . "</td><td>" . "<a href='profile.php?update=$row[email]' class='btn btn-primary mx-2' role='button'><i class='fas fa-edit'></i></a><a href='profile.php?delete=$row[email]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                                }
                            } else {
                                echo "No results";
                            }
                        } elseif (isset($_POST['reset'])) {
                            $res = $obj->getUsers();

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr><td>" . $row['email'] . "</td><td>" . $row['firstName'] . " " . $row['lastName'] . "</td><td>" . "<a href='profile.php?update=$row[email]' class='btn btn-primary mx-2' role='button'><i class='fas fa-edit'></i></a><a href='profile.php?delete=$row[email]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                                }
                            } else {
                                echo "No results";
                            }
                        } else {
                            $_POST = array();
                            $res = $obj->getUsers();

                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr><td>" . $row['email'] . "</td><td>" . $row['firstName'] . " " . $row['lastName'] . "</td><td>" . "<a href='profile.php?update=$row[email]' class='btn btn-primary mx-2' role='button'><i class='fas fa-edit'></i></a><a href='profile.php?delete=$row[email]' class='btn btn-danger mx-2' role='button'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
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