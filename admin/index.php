<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
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
    <title>LOGISTICS COMPANY</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png"> -->
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

</head>

<body>
    <style>
    body{
      margin: 0;
      padding: 0;
      background-image: url('../dist/images/admin_background_image.jpg'); 
      background-size: cover;    
      background-position: center; 
      background-repeat: no-repeat; 
      font-family: Arial, sans-serif;
    }
    form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

input[type="email"],
input[type="password"] {
  padding: 15px;
  height: auto;
  width: 100%;
  border-radius: 5px;
  font-size: 16px;
}

@media (max-width: 768px) {
   .form-group {
    width: 100% !important;
  }
}


    .container {
        position: absolute;
        top: 20%;
        display: grid;
        place-items: center;
    }
    </style>
    <h2 class="p-4" style="color:#ff4424;">
        <marquee behavior="alternate" direction="left">LOGISTICS COMPANY ADMIN</marquee>
    </h2>
    <form action="dashboard_pro.php" method="post">
        <div class="container mt-5">

            <?php if($msg=="success"){ ?>
            <div class="alert alert-success me-4">Message Sent</div>
            <?php } ?>

            <?php if($msg=="error"){ ?>
            <div class="alert alert-danger me-4"><?php echo $comment; ?></div>
            <?php } ?>

            <h4 class="pb-3">Enter your Username and Password</h4><br><br><br>

            <div class="form-group col-md-4 ">
                <input type="email" placeholder="Email" name="username" class="form-control ">
            </div>
            <div class="form-group col-md-4">
                <input type="password" placeholder="Password" name="password" class="form-control">
            </div>
            <a href="dashboard.php">
                <button type="submit" class="btn text-light" style="padding: 10px 26px; background-color:#ff4424;" name="btn">Login</button>
            </a>
            <br><br><br>
            <div id="google_translate_element"></div>
        </div>
    </form>


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
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>