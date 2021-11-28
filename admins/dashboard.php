<?php
$title = "Dashboard";
require_once "../includes/admin_header.php";


if (isset($_SESSION['email'])) {
?>
    <div class="container-fluid">
        <div class="row">
            <?php
            require_once "../includes/sidebar.php";
            ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Hello, <?php echo $_SESSION['email']; ?>!</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
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
                    </div>
                </div>
                <div class="my-4">
                    <div>
                        asdf
                    </div>
                </div>
            </main>
        </div>

    </div>
<?php
} else {
    header("Location: ../login.php");
    exit();
}
?>