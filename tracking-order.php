<?php
session_start();
include('admin/connect.php');
require_once('admin/fns.php');

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tracking_no = $_POST['tracking_no'] ?? '';
    $email = $_POST['email'] ?? '';

    // Use a prepared statement for safety
    $stmt = $conn->prepare("SELECT * FROM orders WHERE Tracking_no = ? AND R_email = ?");
    $stmt->bind_param("ss", $tracking_no, $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $num = $result->num_rows;

    if ($num === 0) {
        $error = "The Tracking Number or Email entered is incorrect!";
        include('track-shipment.php');
        exit;
    } else {
        $row = $result->fetch_assoc();

    }

    $stmt->close();
} 
   
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Tracking Order | Haut Logistics</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="dist/css/bootstrap.css">

    <link href="dist/font-awesome/css/all.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="./dist/images/fav.png" />

    <link href="dist/css/animate.css" rel="stylesheet">

    <link href="dist/css/owl.carousel.css" rel="stylesheet">

    <link href="dist/css/owl.theme.default.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="dist/js/jquery.3.4.1.min.js"></script>

    <script src="dist/js/popper.js" type="text/javascript"></script>

    <script src="dist/js/bootstrap.js" type="text/javascript"></script>

    <script src="dist/js/owl.carousel.js"></script>

    <script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>



    <!-- Main Stylesheet -->

    <link href="dist/style.css" rel="stylesheet" type="text/css" media="all">

    <script src="dist/js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
</head>

<body>

    <style>
    #navbar {
        font-size: 14px;
        padding-top: 10px;
        padding-bottom: 10px;
        position: relative;
        top: 0;
        width: 100%;
        border-bottom: none;
        background-color: #013D5FB2;
    }

    /* Lock progress bar from being interactable */
    .progress-bar {
        pointer-events: none;
        user-select: none;
        cursor: not-allowed;
    }

    /* Lock cursor icon in progress bar from being moved */
    .cursor {
        pointer-events: none;
        user-select: none;
        position: absolute;
        top: 0;
        transform: translateX(-50%);
        z-index: 10;
    }
    </style>

    <?php include 'inc/header.php'; ?>

    <div class="about-banner">
        <div class="container">
            <div class="about-banner-head">Tracking Order</div>
        </div>
    </div>

    <div class="container">
        <div class="tab" style="border-bottom: 5px solid #013D5F;">
            <button><span><img src="./dist/images/track-icon.png" class="img-fluid"></span> Tracking Order</button>
        </div>
    </div>

    <div class="container" style=" margin-bottom: 100px;">
        <div class="row">
            <div class="col-md-6">
                <div class="accordion">
                    <!-- Accordion Item -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="accordion-title">
                                <div class="accordion-titleRow">
                                    <div class="accordion-titleRow-icon">
                                        <iconify-icon icon="mdi-light:truck" width="34" height="34"></iconify-icon>
                                    </div>
                                    <div class="accordion-titleRow-ID">Tracking Order ID From <span>:
                                            <?php echo $row['Tracking_no']; ?></span></div>
                                    <div class="accordion-titleRow-btn"><?php echo $row['Status']; ?></div>
                                </div>
                            </div>
                            <div class="accordion-arrow"></div>
                        </div>
                        <div class="accordion-content">
                            <div class="accordion-content-inner">
                                <div class="accordion-content-inner-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            <b>Full Name</b> <br>
                                                            <span><?php echo $row['R_fullname']; ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            <b>Email</b> <br>
                                                            <span><?php echo $row['R_email']; ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            <b>Frieght class</b> <br>
                                                            <span><?php echo $row['Freight_class']; ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            <b>Weight(kg)</b> <br>
                                                            <span><?php echo $row['Weight']; ?></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="border-bottom: 1px solid #00000033;">
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            <b>Pick-up location</b> <br>
                                                            <span><?php echo $row['Pickup_location']; ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            <b>Drop-off Location</b> <br>
                                                            <span><?php echo $row['Dropoff_location']; ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            <b>Lenght(cm)</b> <br>
                                                            <span><?php echo $row['length']; ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            <b>Ready Date</b> <br>
                                                            <span><?php echo date('d-M-y',strtotime($row['Delivery_date'])); ?></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <b>Items</b> <br> <span><?php echo $row['Items']; ?></span>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tracking-container">
                                    <?php
                                $order_token = $row['Token'];
                        
                                $query2 = "select * from tracking_details where Order_token = '$order_token'";
                                $result2 = mysqli_query($conn,$query2);
                                $num2 = mysqli_num_rows($result2);
                                for ($i = 0; $i < $num2; $i++) {
                                    $row2 = mysqli_fetch_array($result2);
                                ?>

                                    <div class="tracking-event">
                                        <div class="event-details">
                                            <div class="event-time">
                                                <?php echo date('d M Y : h:i:a',strtotime($row2['Date_created'])); ?>
                                            </div>
                                            <div class="event-status"><?php echo $row2['Description'];?></div>
                                            <div class="event-location"><?php echo $row2['Location'];?></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="tracking-carrier">
                                    <div class="tracking-carrierLeft">
                                        <div class="tracking-carrierLeft_details">
                                            <div class="tracking-carrierLeft-img">
                                                <img src="./dist/images/tracking.png" class="img-fluid">
                                            </div>
                                            <div class="tracking-carrierLeft-info">
                                                <div class="tracking-carrierLeft-info-sub">Carrier</div>
                                                <div class="tracking-carrierLeft-info-head">Best Lane</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tracking-carrierRight">
                                        <div class="tracking-carrierRight-icon">
                                            <iconify-icon icon="mingcute:phone-fill" width="30" height="30">
                                            </iconify-icon>
                                        </div>
                                        <div class="tracking-carrierRight-icon">
                                            <iconify-icon icon="mdi:message" width="30" height="30"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="tracking_map">
                    <div class="tracking_map-img">
                        <?php 
                        $query2 = "SELECT * FROM tracking_details WHERE order_token = '{$_POST['tracking_no']}'";
                        $result2 = mysqli_query($conn,$query2);
                        $row2 = mysqli_fetch_array($result2);

                        $current_address = $row2['Location'];
                        $encoded_address =urlencode($current_address);
                        $map_url = "https://www.google.com/maps?q={$encoded_address}&output=embed";
                        ?>
                        <iframe src="<?php echo $map_url;?>" width="540" height="450" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="tracking_map-box">
                        <div class="live_track">
                            <div class="live_track-icon">
                                <iconify-icon icon="lucide:ferris-wheel" width="20" height="20"></iconify-icon>
                            </div>
                            <div class="live_track-head">Live Land Tracking</div>
                        </div>
                        <div class="tracking_stats">
                            <div class="tracking_statsL">Tracking ID : <?php echo $row['Tracking_no'];  ?></div>
                            <div class="tracking_statsR">Tracking Status : <span><?php echo $row['Status']; ?></span>
                            </div>
                        </div>
                        <div class="tracking_stats">
                            <div class="tracking_stats22">Departure :
                                <span><?php echo $row['Pickup_location']; ?></span>
                            </div>
                            <div class="tracking_stats22">Destination :
                                <span><?php echo $row['Dropoff_location']; ?></span>
                            </div>
                        </div>

                        <div class="progress-container">
                            <div class="progress-container-icon">
                                <img src="./dist/images/progress-icon.png" class="img-fluid">
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" id="progressFill"></div>
                                <div class="cursor" id="cursor"
                                    style="margin-left:<?php echo get_progress($row['Token']); ?>%;">
                                    <div class="cursor-icon">
                                        <iconify-icon icon="mdi-light:truck" width="30" height="30"></iconify-icon>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="package-dep-rec">
                            <div class="package-dep-received">
                                <div class="package-dep-received-details">Package Depart</div>
                                <div class="package-dep-received-date">
                                    <b><?php echo date('d M Y : h:i:a',strtotime($row['Date_created'])); ?></div></b>
                            </div>
                            <div class="package-dep-received">
                                <div class="package-dep-received-details">Package Recieved</div>
                                <div class="package-dep-received-date">
                                  <b> <?php echo get_delivery_time($order_token); ?></div></b>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


    <script src="./accord-script.js"></script>

    <script src="./tracking-script.js"></script>





    <?php include 'inc/footer.php'; ?>

</body>

</html>