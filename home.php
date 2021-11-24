<?php
    $title = "Home";
    require_once "./components/template/header.php";
?>

<div class="">
    <div class="row align-items-start">
        <div class="col col-xs-12">
            <div class="text-center" style="height: 60vh; background-color: yellow; width: 100%">
                <h1 style="padding: 100px 0 50px 0;">Need a home?</h1>
                <a href="contactus.php"><button class="btn btn-primary">Contact us</button></a>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col col-12 col-sm-12 col-md-4">
            <div class="text-center" style="margin: 20px auto; height: 40vh; width: 90%">
                <div class="card text-center">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Buy a home</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-sm-12 col-md-4">
            <div class="text-center" style="margin: 20px auto; height: 40vh; width: 90%">
                <div class="card text-center">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sell a home</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-sm-12 col-md-4">
            <div class="text-center" style="margin: 20px auto; height: 40vh; width: 90%">
                <div class="card text-center">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rent a home</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	require_once "./components/template/footer.php";
?>