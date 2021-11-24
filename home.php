<?php
    $title = "Home";
    require_once "./components/template/header.php";
?>
<head>
    <link href="css/home.css" rel="stylesheet">
</head>


<hr>
<div class="site-content">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column">
            <h1 class="site-title">Choose your home.</h1>
            <h6 class="site-desc">Home is where the heart is.</h6>
            <a href="contactus.php"><button class="btn shadow home-btn">Contact us</button></a>

            <div class="d-flex flex-row">
                <p> sds </p>
            </div>
        </div>
    </div>
</div>
<hr>


<div class="pad">
    
<h2 class="title text-center">See the services of Home Escapes</h2>
    <div class="row align-items-center card-contain center">
    
        <div class="col col-12 col-sm-12 col-md-4">
            
            <div class="text-center" style="margin: 20px auto; height: 40vh; width: 90%">
            
                <div class="card shadow text-center">
                <img class="service-icons align-items-center" src="images/real-estate.png" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Buy a home</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn home-btns">Search Homes</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col col-12 col-sm-12 col-md-4">
            <div class="text-center" style="margin: 20px auto; height: 40vh; width: 90%">
                <div class="card shadow text-center">
                <img class="service-icons align-items-center" src="images/sell.png" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Sell a home</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn home-btns">Give a Home</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col col-12 col-sm-12 col-md-4">
            <div class="text-center" style="margin: 20px auto; height: 40vh; width: 90%">
                <div class="card shadow text-center">
                <img class="service-icons align-items-center" src="images/search.png" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Rent a home</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn home-btns">Find Rentals</a>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    <div class="last-text">
    <p> Home Escapes is committed to giving our customers a secure and lasting agreements regarding houses they are interested in buying, selling, or renting.digital accessibility for individuals with disabilities.  
        We are continuously working to improve the accessibility of our services for everyone. Feedback or reports of an issue will be highly appreciated and treated with utmost importance. </p>
    </div>
</div>

<?php
	require_once "./components/template/footer.php";
?>