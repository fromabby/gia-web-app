<?php
$title = "Profile";
require_once "./components/template/admin_header.php";

if (isset($_POST["submit"])) {
    if ($_POST['password'] !== $_POST['confirmpassword']) {
        header("Location: register.php?message=Password do not match");
    } else {
        include_once './functions/auth.php';
        $obj = new User();
        $res = $obj->register($_POST);
        if ($res == true) {
            header("Location: register.php?message=Registered Successfully");
        } else {
            header("Location: register.php?message=Error");
        }
    }
}
?>

<div class="card" style="width: 30rem; margin: 20px auto;">
    <div class="card-body">
        <h5 class="card-title">Contact Us</h5>
        <?php
        if (isset($_GET['message'])) {
        ?>
            <p class="message"><?php echo $_GET['message']; ?></p>
        <?php } ?>
        <form action="" method="post">
            <div class="form-group pb-3">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Juan" name="firstName" value=<?php $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : ""; echo $firstName; ?>>
            </div>
            <div class="form-group pb-3">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Dela Cruz" name="lastName" value=<?php $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : ""; echo $lastName; ?>>
            </div>
            <div class="form-group pb-3">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="name@example.com" name="email" value=<?php $email = isset($_POST['email']) ? $_POST['email'] : ""; echo $email; ?>>
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
require_once "./components/template/footer.php";
?>