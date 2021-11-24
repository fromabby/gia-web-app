<?php
    $title = "Login";
    require_once "./components/template/header.php";
?>

<div class="card" style="width: 20rem; margin: 20px auto;">
    <div class="card-body">
        <h5 class="card-title">Admin Login</h5>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <form class="form-horizontal mt-3" method="post" action="admin_verify.php">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="myusername" name="username">
                <label for="floatingInput">Username</label>
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
    require_once "./components/template/footer.php";
?>