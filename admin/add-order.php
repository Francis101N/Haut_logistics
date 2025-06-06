<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);


session_start();

include('connect.php');
require_once('fns.php');
if(!$_SESSION['valid_user'])
{
    $sessionerror = 'yes';
    include('index.php');
    exit;
}


 $Tracking_no  = generate_tracking();

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>LOGISTICS | Add Order</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png"> -->
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5" style="background-color:#ff4424;">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->

                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text pt-2">
                            <!-- dark Logo text -->
                            <img src="../dist/images/fav.png" style="width: 80px;" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="background-color:#ff4424;">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span
                                    class="text-white font-medium"><?php echo $_SESSION['valid_user'] ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include('sidenav.php'); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white"><br>
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title" style="color:#013d5f;">Add Order</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="javascript:history.back();" class="fw-normal" style="color:#013d5f;">Go Back</a></li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title" style="color:#013d5f;">Add a new Order to the system</h3>
                            <form action="proc_order.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php if($error) {
                                        ?>
                                        <div class="alert alert-danger"><?php echo $error; ?> </div>
                                        <?php } ?>
                                        <br>
                                        <?php if($success) {
                                        ?>
                                        <div class="alert alert-success"><?php echo $success; ?> </div>
                                        <?php } ?><br>
                                        <div class="myfields">
                                            <label>Tracking No </label>
                                            <input type="text" name="tracking_no" class="form-control" value="<?php echo $Tracking_no; ?>" readonly>
                                        </div>
                                        <div class="myfields">
                                            <label>FullNames </label>
                                            <input type="text" name="fullnames" class="form-control" value="<?php echo $Fullnames; ?>">
                                        </div>
                                        <div class="myfields">
                                            <label>Email </label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $Email; ?>">
                                        </div>
                                        <div class="myfields">
                                            <label>Freight Class </label>
                                            <input type="text" name="freight_class" class="form-control" value="<?php echo $Freight_class; ?>">
                                        </div>
                                        <div class="myfields">
                                            <label>Items </label>
                                            <input type="text" name="items" class="form-control" value="<?php echo $Items; ?>" >
                                        </div>
                                        <div class="myfields">
                                            <label>Description </label>
                                            <input type="text" name="description" class="form-control" value="<?php echo $Description; ?>" >
                                        </div>
                                        <div class="myfields">
                                            <label>Weight </label>
                                            <input type="text" name="weight" class="form-control" value="<?php echo $Weight; ?>">
                                        </div>
                                        <div class="myfields">
                                            <label>Pickup Location</label>
                                            <input type="text" name="pickup_location" class="form-control" value="<?php echo $Pickup_location; ?>">
                                        </div>
                                        <div class="myfields">
                                            <label>Dropoff Location</label>
                                            <input type="text" name="dropoff_location" class="form-control" value="<?php echo $Dropoff_location; ?>">
                                        </div>
                                        <div class="myfields">
                                            <label>Length</label>
                                            <input type="text" name="length" class="form-control" value="<?php echo $Length; ?>">
                                        </div>
                                        <div class="myfields">
                                            <label>Delivery Date</label>
                                            <input type="date" name="delivery_date" class="form-control" value="<?php echo $Delivery_date; ?>">
                                        </div>
                                        <div class="myfields">
                                            <label for="delivery_status">Delivery Status:</label>
                                            <select name="status" class="form-control" required>
                                                        <option value="" disabled
                                                            <?php echo empty($status) ? 'selected' : ''; ?>>Select
                                                            Status</option>
                                                        <option value="Pending"
                                                            <?php echo ($status == 'Pending') ? 'selected' : ''; ?>>
                                                            Pending</option>
                                                        <option value="In Transit"
                                                            <?php echo ($status == 'In Transit') ? 'selected' : ''; ?>>
                                                            In Transit</option>
                                                        <option value="On Hold"
                                                            <?php echo ($status == 'On Hold') ? 'selected' : ''; ?>>On
                                                            Hold</option>
                                                        <option value="Destination"
                                                            <?php echo ($status == 'Destination') ? 'selected' : ''; ?>>
                                                            Destination</option>
                                                        <option value="Delivered"
                                                            <?php echo ($status == 'Delivered') ? 'selected' : ''; ?>>
                                                            Delivered</option>
                                                </select>

                                        </div>

                                        <div class="myfields">
                                            <input type="submit" value="Add"
                                                class="form-control btn text-light" style="background-color:#013d5f;">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>