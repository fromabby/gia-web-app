<?php
    $title = "Contact Us";
    require_once "./includes/header.php";

    if (isset($_POST["submit"])) {
        include_once './db/inquiry.php';
        $obj = new Inquiry();
        $res = $obj->contactUs($_POST);
        if ($res == true) {
            header("Location: contactus.php?message=Sent Successfully");
        } else {
            header("Location: contactus.php?message=Error");
        }
    }
?>

<style>
    .rectangle{
        background-color: #040B1C;
        height: 5px; 
        width: auto;
    }

    .card-header{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
        background-color: #c8d8ff;
    }

    label{
        font-weight: bold;
    }

    .home-btn {
        background-color: #040B1C;
        color: white;
        border-radius: 50px;
        padding: 5px 30px 5px 30px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .footer {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 70px;
        color: white;
        background-color: #212529;
        text-align: center;
        
    }
    .textFooter{
        padding-top: 20px;
        align-items: flex-end  ;
        color: white;

    }

</style>


<div class="rectangle"></div>
<div class="card shadow" style="width: 30rem; margin: 20px auto; margin-top: 35px; margin-bottom: 35px;">
    <div class="card-body">
        <h4 class="card-header">Contact Us</h4>
        
        <?php
        if (isset($_GET['message'])) {
        ?>
            <p class="message"><?php echo $_GET['message']; ?></p>
        <?php } ?>
        <form action="" method="post">
            <div class="form-group pb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Juan G. Dela Cruz" name="fullName">
            </div>    
            <div class="form-group pb-3">  
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="name@example.com" name="email">
            </div>
            <div class="form-group pb-3">
                <label>Contact Number</label>
                <input type="text" class="form-control" placeholder="09xx-xxx-xxxx" name="contactNumber">
            </div>    
            <div class="form-group pb-3">
                <label>Concern Type</label>
                <select class="form-control" name="concernType">
                    <option value="">-</option>
                    <option value="Inquiry">Inquiry</option>
                    <option value="Quotation">Quotation</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="form-group pb-3" name="message">
                <label>Message</label>
                <textarea class="form-control" rows="3" name="message"></textarea>
            </div>
            <center><input type="submit" class="btn shadow home-btn" name="submit" value="Submit"/></center>   
        </form>
    </div>
</div>

<?php
    require_once "./includes/footer.php";
?>