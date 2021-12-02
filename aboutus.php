<?php
    $title = "About Us";
    require_once "./includes/header.php";
?>
<head>
    <link href="./assets/css/home.css" rel="stylesheet">
</head>


<style>
    .rectangle {
    background-color: #040B1C;
    height: 5px;
    width: auto;
    }

    .firstSection {
        background-color: #EFEFEF;
        width: auto;
        margin-bottom: -16px;
        padding-bottom: 0px;
    }

    
    .firstText{
        width: 80%;
        text-align: left;
        padding: 110px 10px 120px 50px;
        
    }


    .secondSection {
        background-color: #040B1C;
        color: white;
        width: auto;
    }

    .secondSection h6{
        padding: 80px 10px 2px 50px;
        color: #c0cff5;
    }

    .secondSection h5{
        padding: 0px 20px 80px 50px;
    }

    .secondSection h3{
        padding: 0px 20px 10px 50px;
    }

    .secondSection img{
        padding: 0px 50px 0px 0px;
    }

    .thirdSection {
        background-color: #EFEFEF;
        width: auto;
        padding:80px 0px 80px 50px;
    }

    .thirdSection h4{
        padding-top: 0px;
    }

    .thirdSection h3{
        font-weight: bold;
        text-align: center;
        padding-bottom: 5px;
        width: 27%;
        border-bottom:3px solid #000;
        margin-left: auto;
        margin-right: auto;
    }


    .thirdSection h5{
        padding-bottom: 0px;    
    }
    
    .thirdSection h1{
        padding-top: 30px;
    }

    .cent{
        margin-left: auto;
        margin-right: auto;
        width: 80%;
    }

    .fourthSection {
        background-color: #c0cff5;
        width: auto;
        padding:80px 0px 80px 50px;
    }

    .fourthSection h3{
        font-weight: bold;
        padding-bottom: 5px;
        
        
        border-bottom:2px solid #000;
    }

    .fourthSection h5{
        padding-top: 15px;
        padding-right: 50px;
    }

  


</style>
<div>
<div class="rectangle"></div>
<div class="container-fluid firstSection">
 <h3 class="firstText">Every home from GIA Homes — vibrant neighborhoods, groundbreaking living solutions, 
     masterplanned developments — nurtures individuals and hard-earned investments with a 
     singular vision: giving you a place for living and working well.</h3>
</div>
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

</div>


<?php
	require_once "./includes/footer.php";
?>
</div>