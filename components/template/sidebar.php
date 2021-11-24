<?php
require_once "./components/template/admin_header.php";

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
?>

    <head>
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <link href="../../css/dashboard.css" rel="stylesheet">

        <style>
            /* Fixed sidenav, full height */
            .sidenav {
                height: 100%;
                width: 200px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #343A40;
                overflow-x: hidden;
                padding-top: 50px;
            }

            /* Style the sidenav links and the dropdown button */
            .sidenav a,
            .dropdown-btn {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 20px;
                color: #fff;
                display: block;
                border: none;
                background: none;
                width: 100%;
                text-align: left;
                cursor: pointer;
                outline: none;
            }

            /* On mouse-over */
            .sidenav a:hover,
            .dropdown-btn:hover {
                color: #f1f1f1;
            }

            /* Main content */
            .main {
                margin-left: 200px;
                /* Same as the width of the sidenav */
                font-size: 20px;
                /* Increased text to enable scrolling */
                padding: 0px 10px;
            }

            /* Add an active class to the active dropdown button */
            .active {
                background-color: #785382;
                color: black;
            }

            /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
            .dropdown-container {
                display: none;
                background-color: #262626;
                padding-left: 8px;
            }

            /* Optional: Style the caret down icon */
            .fa-caret-down {
                float: right;
                padding-right: 8px;
            }
        </style>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style4.css">

        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="sidenav">
            <a href="dashboard.php">Dashboard</a>
            <button class="dropdown-btn">Properties
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="property.php?new=1">Create Property</a>
                <a href="properties_table.php">Properties List</a>
            </div>
            <a href="inquiries_table.php">Inquiries</a>
            <a href="register.php">Register</a>
            <a href="user_table.php">Users</a>
            <a href=profile.php?view=<?php echo $email; ?>>Profile</a>
            <a href="admin_logout.php">Sign out</a>
            <a href="home.php">Back to Home</a>
        </div>
        <script>
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }
        </script>
    </body>
<?php
}
?>