<?php
$title = "Dashboard";
require_once "./components/template/admin_header.php";


if (isset($_SESSION['username'])) {
?>
    <div class="container-fluid">
        <div class="row">
            <?php
            require_once "./components/template/sidebar.php";
            ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Hello, <?php echo $_SESSION['username']; ?>!</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <!-- <a class="btn btn-primary" role="button" href="new_property.php">Create New Property</a>
                            <a class="btn btn-primary" role="button" href="properties_table.php">List Property</a>
                            <a class="btn btn-primary" role="button" href="inquiries_table.php">List Inquiries</a>
                            <a class="btn btn-primary" role="button" href="admin_logout.php">Logout</a> -->
                        </div>
                    </div>
                </div>
                <div class="my-4" style="width=900px; height=410px;">
                    <div>
                        asdf
                    </div>
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