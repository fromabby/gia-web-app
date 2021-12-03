<?php
$title = "Register";
require_once "../includes/admin_header.php";

if (isset($_POST["submit"])) {
    if ($_POST['password'] !== $_POST['confirmpassword']) {
        header("Location: register.php?error=Password do not match.");
    } else {
        include_once './../db/auth.php';
        $res = $obj->register($_POST);
        if ($res == true) {
            header("Location: register.php?message=Registered successfully");
        } else {
            header("Location: register.php?error=There was an error. Please try again.");
        }
    }
}
?>

<div class="card" style="width: 30rem; margin: 20px auto;">
    <?php
    require_once "../includes/sidebar.php";
    ?>
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
        <h5 class="card-title">Register</h5>
        <form action="" method="post">
            <div class="form-group pb-3">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Juan" name="firstName" value=<?php $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : "";
                                                                                                    echo $firstName; ?>>
            </div>
            <div class="form-group pb-3">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Dela Cruz" name="lastName" value=<?php $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : "";
                                                                                                        echo $lastName; ?>>
            </div>
            <div class="form-group pb-3">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="name@example.com" name="email" value=<?php $email = isset($_POST['email']) ? $_POST['email'] : "";
                                                                                                            echo $email; ?>>
            </div>
            <div class="form-group pb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="password" name="password">
            </div>
            <div class="form-group pb-3">
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="password" name="confirmpassword">
            </div>
            <center><input type="submit" class="btn btn-primary" name="submit" value="Submit" /></center>
        </form>
    </div>
</div>

<?php
require_once "../includes/footer.php";
?>