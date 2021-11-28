<?php
$title = "Login";
require_once "./includes/header.php";

if (!isset($_SESSION['email'])) {
?>

<div class="card" style="width: 20rem; margin: 50px auto;">
        <div class="card-body">
            <h4 class="card-header">Admin Login</h4>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <form class="form-horizontal mt-3" method="post" action="./db/admin_verify.php">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="example@domain.com" name="email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating" style="padding-bottom: 30px;">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>

                <center><input type="submit" name="submit" class="btn shadow home-btn mt-2"></center>
            </form>
        </div>
    </div>

<?php
} else {
    header("Location: admins/dashboard.php");
}

require_once "./includes/footer.php";
?>