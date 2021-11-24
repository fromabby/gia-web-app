<?php
$title = "Login";
require_once "./components/template/header.php";

if (!isset($_SESSION['email'])) {
?>

    <div class="card" style="width: 20rem; margin: 20px auto;">
        <div class="card-body">
            <h5 class="card-title">Admin Login</h5>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <form class="form-horizontal mt-3" method="post" action="admin_verify.php">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="example@domain.com" name="email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>

                <center><input type="submit" name="submit" class="btn btn-primary mt-2"></center>
            </form>
        </div>
    </div>

<?php
} else {
    header("Location: dashboard.php");
}

?>