<?php
$title = "Login";
require_once "./components/template/header.php";

if (!isset($_SESSION['email'])) {
?>
<<<<<<< Updated upstream
<div class="card" style="width: 20rem; margin: 50px auto;">
=======

<style>
    .card-header{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
        background-color: #c8d8ff;
    }

    .rectangle{
        background-color: #040B1C;
        height: 5px; 
        width: auto;
    }

    .home-btn {
        background-color: #040B1C;
        color: white;
        border-radius: 50px;
        padding: 5px 30px 5px 30px;
        font-weight: bold;
        margin-bottom: 5px;
    }
</style>

<div class="rectangle"></div>
    <div class="card shadow" style="width: 20rem; margin: 20px auto; margin-top: 35px;">
>>>>>>> Stashed changes
        <div class="card-body">
            <h4 class="card-header">Admin Login</h4>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <form class="form-horizontal mt-3" method="post" action="admin_verify.php">
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
    header("Location: dashboard.php");
}

require_once "./components/template/footer.php";
?>