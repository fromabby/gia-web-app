<?php
if (isset($_GET['update'])) {
    $title = "Update Profile";
}
if (isset($_GET['view'])) {
    $title = "My Profile";
}

include_once './../db/auth.php';
require_once "../includes/admin_header.php";

if (isset($_SESSION['email'])) {
    $obj = new User();

    if (isset($_GET['delete'])) {
        $email = $_GET['delete'];
        $del = $obj->deleteUser($email);
        if ($del) {
            header("Location: properties_table.php");
        } else {
            echo "Error";
        }
    }

    if (isset($_GET['update'])) {
        $title = "Update Profile";
        $email = $_GET['update'];
        $singRes = $obj->getSingleUser($email);

        $row = mysqli_fetch_assoc($singRes);
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $useremail = $row['email'];
        $password = $row['password'];

        if (isset($_POST["update"])) {
            $obj = new User();

            if ($_POST['password'] !== $_POST['confirmpassword']) {
                header("Location: profile.php?view=$useremail&message=Passwords do not match.");
            } else {
                $res = $obj->updateUser($_POST);
                if ($res == true) {
                    header("Location: profile.php?view=$useremail&message=Profile updated successfully!");
                } else {
                    header("Location: register.php?view=$useremail&error=Error updating user.");
                }
            }
        }
?>
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
                <h5 class="card-title">Update Profile</h5>                
                <form action="" method="post">
                    <div class="form-group pb-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Juan" name="firstName" value=<?php echo $firstName; ?>>
                    </div>
                    <div class="form-group pb-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Dela Cruz" name="lastName" value=<?php echo $lastName; ?>>
                    </div>
                    <div class="form-group pb-3">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="name@example.com" name="email" value=<?php echo $useremail; ?> disabled>
                    </div>
                    <div class="form-group pb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password" value=<?php echo $password; ?>>
                    </div>
                    <div class="form-group pb-3">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="password" name="confirmpassword" value=<?php echo $password; ?>>
                    </div>
                    <center><input type="submit" class="btn btn-primary" name="update" value="Update" /></center>
                </form>
            </div>
        </div>
        <?php
    }

    if (isset($_GET['view'])) {
        $title = "My Profile";
        $email = $_GET['view'];
        $singRes = $obj->getSingleUser($email);


        if ($singRes == true) {
            $row = mysqli_fetch_assoc($singRes);
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $useremail = $row['email'];
        ?>
            <?php
            require_once "../includes/sidebar.php";
            ?>
            <style>
                .form-group {
                    margin-bottom: 3px;
                }

                .card-body {
                    border-radius: 5px;
                    background-color: #f2f2f2;
                    padding: 20px;

                }

                h4 {
                    padding-bottom: 14px;
                }
            </style>
            <div class="card shadow" style="width: 30rem; margin: 20px auto;">
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
                    <h4>My Profile</h4>
                    <form action="" method="post">
                        <div class="form-group pb-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="Juan" name="firstName" value="<?php echo $firstName; ?>" disabled>
                        </div>
                        <div class="form-group pb-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Dela Cruz" name="lastName" value="<?php echo $lastName; ?>" disabled>
                        </div>
                        <div class="form-group pb-3">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="name@example.com" name="email" value="<?php echo $useremail; ?>" disabled>
                        </div>
                        <center><a class="btn btn-primary" role="button" href=profile.php?update=<?php echo $email; ?>>Update</a></center>
                    </form>
                </div>
            </div>
        <?php
        } else {
            header("Location: profile.php?view=$email&error=Cannot retrieve details from server.");
        ?>
            <div class="card" style="width: 30rem; margin: 20px auto;">
                <div class="card-body">
                    <h5 class="card-title">My Profile</h5>
                    <?php
                    if (isset($_GET['message'])) {
                    ?>
                        <p class="message"><?php echo $_GET['message']; ?></p>
                    <?php } ?>
                </div>
            </div>
<?php
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
?>