<?php
    $title = "Home";
    require_once "./includes/header.php";

    include_once "./db/property.php";
    //object create
    $obj = new Property();

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
<h2 class="title text-center">See GIA Homes properties</h2>
    <div class="row align-items-center card-contain center">
        <div class="rectangle2"></div>
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
    <div class="last-text">
        
    <center><p> GIA Homes is committed to giving our customers a secure and lasting agreements regarding houses they are interested in buying, selling, or renting.digital accessibility for individuals with disabilities.  
        We are continuously working to improve the accessibility of our services for everyone. Feedback or reports of an issue will be highly appreciated and treated with utmost importance. </p></center>
    </div>
</div>
<div class="rectangle"></div>
<?php
	require_once "./includes/footer.php";
?>