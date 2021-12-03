<?php
    $title = "Home";
    require_once "./includes/header.php";

    include_once "./db/property.php";
    //store list of properties in variable
    $listProperty = $obj->getProperties();
?>
<head>
    <link href="./assets/css/home.css" rel="stylesheet">
</head>

<div class="rectangle"></div>
<div class="site-content">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column">
            <h1 class="site-title">Choose your home.</h1>
            <h6 class="site-desc">Home is where the heart is.</h6>
            <a href="./contactus.php"><button class="btn shadow home-btn">Contact us</button></a>
        </div>
    </div>
</div>
<div class="pad">
<div class="rectangle"></div>
<div class="container-fluid secondSection">
    <div class="row align-items-start">
        <div class="col">
            <h6>WHAT WE DO</h6>
            <h3>GIA Homes is the Philippines’ leading innovative real estate developer.</h3>
            <h5>GIA Homes offers a vibrant portfolio of groundbreaking 
            real estate developments that provides upscale living and working spaces within 
            various thriving and emerging growth centers around the country.</h5>
        </div>
        <div class="col"><img class="img-fluid" src="db/images/company.jpg"></div>
    </div>   
</div>
<div class="rectangle"></div>
<div class="firstSection">
<h2 class="title text-center">See GIA Homes properties</h2>
    <div class="row align-items-center card-contain center">
        
        <?php 
        $x = 3;
        while($x != 0 && $row = $listProperty->fetch_assoc()) {
                echo "<div class='col col-12 col-sm-12 col-md-4'>" .
                "<div class='text-center' style='margin: 20px auto; height: 40vh; width: 90%'>" .
                    "<div class='card shadow text-center'>" .
                        "<img class='service-icons align-items-center' src=./db/images/" . $row['image'] .  " >" .
                        "<div class='card-body'>" .
                            "<h4 class='card-title'>" . $row['name'] . "</h4>" .
                            "<p class='card-text'>" . $row['description'] . "</p>" .
                            "<a href='property.php?id=" . $row['id'] . "' class='btn home-btns'>View</a>" .
                        "</div>" .
                    "</div>" . 
                "</div>" .
            "</div>"; 
            $x=$x-1;
        } 
        ?>
    </div>

    </div>
<div class="container-fluid fourthSection">
    <div class="row align-items-start">
        <div class="col">
        <h3>Our Mission</h3>
        </br></br></br></br>
        <h3>Our Vision</h3>
        </div>
        <div class="col-10">
            
        <h5>We strive to elevate our customers’ quality of life through innovative real estate solutions 
                in vibrant growth centers all over the country. We act responsibly with integrity, accountability 
                and total commitment. We achieve excellence through passion, focus and foresight.</h5>
                </br></br>
           
            <h5>We are the Philippines' leading innovative real estate developer serving the upscale market.</h5>
   
        </div>
            
             </div>
</div>
<div class="container-fluid thirdSection">
    <h3>Our Workspace Portfolio</h3>
    <div class="row cent align-items-start">
        <div class="col">
            <h1>16,643</h1>
            <h5>Workstations</h5>
        </div>
        <div class="col">
            <h1>30+</h1>
            <h5>Office Locations</h5>
        </div>
        <div class="col">
            
            <h1>51</h1>
            <h5>Managed Floors</h5>
        </div>
        <div class="col">
        <h1>88,742 SQM</h1>
            <h5>Total Workspace</h5p>
        </div>
    </div>
</div>


    <div class="last-text">
        
    <center><p> GIA Homes is committed to giving our customers a secure and lasting agreements regarding houses they are interested in buying, selling, or renting.digital accessibility for individuals with disabilities.  
        We are continuously working to improve the accessibility of our services for everyone. Feedback or reports of an issue will be highly appreciated and treated with utmost importance. </p></center>
    </div>
</div>
<div class="rectangle"></div>
<?php
	require_once "./includes/footer.php";
?> 