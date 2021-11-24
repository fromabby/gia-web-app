<head>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link href="../../css/dashboard.css" rel="stylesheet">
    <link href="../../css/sidebar.css" rel="stylesheet">

    <style>
        /* Shrinking the sidebar from 250px to 80px and center aligining its content*/
        #sidebar.active {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
        }

        /* Toggling the sidebar header content, hide the big heading [h3] and showing the small heading [strong] and vice versa*/
        #sidebar .sidebar-header strong {
            display: none;
        }

        #sidebar.active .sidebar-header h3 {
            display: none;
        }

        #sidebar.active .sidebar-header strong {
            display: block;
        }

        #sidebar ul li a {
            text-align: left;
        }

        #sidebar.active ul li a {
            padding: 20px 10px;
            text-align: center;
            font-size: 0.85em;
        }

        #sidebar.active ul li a i {
            margin-right: 0;
            display: block;
            font-size: 1.8em;
            margin-bottom: 5px;
        }

        /* Same dropdown links padding*/
        #sidebar.active ul ul a {
            padding: 10px !important;
        }

        /* Changing the arrow position to bottom center position, 
   translateX(50%) works with right: 50% 
   to accurately  center the arrow */
        #sidebar.active .dropdown-toggle::after {
            top: auto;
            bottom: 10px;
            right: 50%;
            -webkit-transform: translateX(50%);
            -ms-transform: translateX(50%);
            transform: translateX(50%);
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
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background-color:#343A40">
            <div class="sidebar-header">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php">
                        <i class="fas fa-columns"></i>
                        Dashboard
                    </a>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="background-color:#343A40">
                        <i class="fas fa-home"></i>
                        Properties
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu" >
                        <li>
                            <a href="new_property.php"><i class="fas fa-plus mr-2"></i>Create Property</a>
                        </li>
                        <li>
                            <a href="properties_table.php"><i class="far fa-trash-alt mr-2"></i>List Property</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="inquiries_table.php">
                        <i class="far fa-question-circle"></i> Inquiries
                    </a>
                    <a href="admin_logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        Sign out
                    </a>
                    <a href="home.php">
                        <i class="fas fa-briefcase"></i>
                        Back to Home
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    </nav>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>