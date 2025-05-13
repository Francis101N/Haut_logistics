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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
</style>

<?php include 'inc/header.php'; ?>

<div class="about-banner" >
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
                                <div class="accordion-titleRow-ID">Tracking Order ID From <span>: #1234567890</span></div>
                                <div class="accordion-titleRow-btn">Received</div>
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
                                            <tr >
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Full Name <br> <span>James Cole</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Email <br> <span>Jcole@gmail.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Frieght class <br> <span>Land</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Weight(kg) <br> <span>100</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #00000033;">
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Pick-up location <br> <span>Lagos</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Drop-off Location <br> <span>Abuja</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Lenght(cm) <br> <span>100</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Ready Date <br> <span>23/05/2025</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tracking-container">                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 09:00am</div>
                                        <div class="event-status">The package has been picked up</div>
                                        <div class="event-location">Lagos, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 11:00am</div>
                                        <div class="event-status">The package in transit</div>
                                        <div class="event-location">Ibadan, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 03:00pm</div>
                                        <div class="event-status">The package in transit</div>
                                        <div class="event-location">Ibadan, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 08:00pm</div>
                                        <div class="event-status">The package is in transit to his final destination</div>
                                        <div class="event-location">Abuja, Nigeria</div>
                                    </div>
                                </div>
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
                                        <iconify-icon icon="mingcute:phone-fill" width="30" height="30"></iconify-icon>
                                    </div>
                                    <div class="tracking-carrierRight-icon">
                                        <iconify-icon icon="mdi:message" width="30" height="30"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- Accordion Item -->

                <!-- Accordion Item -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-title">
                            <div class="accordion-titleRow">
                                <div class="accordion-titleRow-icon">
                                    <iconify-icon icon="mdi-light:truck" width="34" height="34"></iconify-icon>
                                </div>
                                <div class="accordion-titleRow-ID">Tracking Order ID From <span>: #1234567890</span></div>
                                <div class="accordion-titleRow-btn">In Transit</div>
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
                                            <tr >
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Full Name <br> <span>James Cole</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Email <br> <span>Jcole@gmail.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Frieght class <br> <span>Land</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Weight(kg) <br> <span>100</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #00000033;">
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Pick-up location <br> <span>Lagos</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Drop-off Location <br> <span>Abuja</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Lenght(cm) <br> <span>100</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Ready Date <br> <span>23/05/2025</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tracking-container">                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 09:00am</div>
                                        <div class="event-status">The package has been picked up</div>
                                        <div class="event-location">Lagos, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 11:00am</div>
                                        <div class="event-status">The package in transit</div>
                                        <div class="event-location">Ibadan, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 03:00pm</div>
                                        <div class="event-status">The package in transit</div>
                                        <div class="event-location">Ibadan, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 08:00pm</div>
                                        <div class="event-status">The package is in transit to his final destination</div>
                                        <div class="event-location">Abuja, Nigeria</div>
                                    </div>
                                </div>
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
                                        <iconify-icon icon="mingcute:phone-fill" width="30" height="30"></iconify-icon>
                                    </div>
                                    <div class="tracking-carrierRight-icon">
                                        <iconify-icon icon="mdi:message" width="30" height="30"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- Accordion Item -->

                <!-- Accordion Item -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-title">
                            <div class="accordion-titleRow">
                                <div class="accordion-titleRow-icon">
                                    <iconify-icon icon="icon-park-outline:ship" width="34" height="34"></iconify-icon>
                                </div>
                                <div class="accordion-titleRow-ID">Tracking Order ID From <span>: #1234567890</span></div>
                                <div class="accordion-titleRow-btn">Pending</div>
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
                                            <tr >
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Full Name <br> <span>James Cole</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Email <br> <span>Jcole@gmail.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Frieght class <br> <span>Land</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Weight(kg) <br> <span>100</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #00000033;">
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Pick-up location <br> <span>Lagos</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Drop-off Location <br> <span>Abuja</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Lenght(cm) <br> <span>100</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Ready Date <br> <span>23/05/2025</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tracking-container">                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 09:00am</div>
                                        <div class="event-status">The package has been picked up</div>
                                        <div class="event-location">Lagos, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 11:00am</div>
                                        <div class="event-status">The package in transit</div>
                                        <div class="event-location">Ibadan, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 03:00pm</div>
                                        <div class="event-status">The package in transit</div>
                                        <div class="event-location">Ibadan, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 08:00pm</div>
                                        <div class="event-status">The package is in transit to his final destination</div>
                                        <div class="event-location">Abuja, Nigeria</div>
                                    </div>
                                </div>
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
                                        <iconify-icon icon="mingcute:phone-fill" width="30" height="30"></iconify-icon>
                                    </div>
                                    <div class="tracking-carrierRight-icon">
                                        <iconify-icon icon="mdi:message" width="30" height="30"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- Accordion Item -->

                <!-- Accordion Item -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-title">
                            <div class="accordion-titleRow">
                                <div class="accordion-titleRow-icon">
                                    <iconify-icon icon="simple-line-icons:plane" width="34" height="34"></iconify-icon>
                                </div>
                                <div class="accordion-titleRow-ID">Tracking Order ID From <span>: #1234567890</span></div>
                                <div class="accordion-titleRow-btn">Pending</div>
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
                                            <tr >
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Full Name <br> <span>James Cole</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Email <br> <span>Jcole@gmail.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Frieght class <br> <span>Land</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Weight(kg) <br> <span>100</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #00000033;">
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Pick-up location <br> <span>Lagos</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Drop-off Location <br> <span>Abuja</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Lenght(cm) <br> <span>100</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="accordion-content-inner-table-info">
                                                    Ready Date <br> <span>23/05/2025</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tracking-container">                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 09:00am</div>
                                        <div class="event-status">The package has been picked up</div>
                                        <div class="event-location">Lagos, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 11:00am</div>
                                        <div class="event-status">The package in transit</div>
                                        <div class="event-location">Ibadan, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 03:00pm</div>
                                        <div class="event-status">The package in transit</div>
                                        <div class="event-location">Ibadan, Nigeria</div>
                                    </div>
                                </div>
                                
                                <div class="tracking-event">
                                    <div class="event-details">
                                        <div class="event-time">23 April 2024 : 08:00pm</div>
                                        <div class="event-status">The package is in transit to his final destination</div>
                                        <div class="event-location">Abuja, Nigeria</div>
                                    </div>
                                </div>
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
                                        <iconify-icon icon="mingcute:phone-fill" width="30" height="30"></iconify-icon>
                                    </div>
                                    <div class="tracking-carrierRight-icon">
                                        <iconify-icon icon="mdi:message" width="30" height="30"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- Accordion Item -->
            </div>          
        </div>
        <div class="col-md-6">
            <div class="tracking_map">
                <div class="tracking_map-img">
                    <img src="./dist/images/tracking-map.png" class="img-fluid">
                </div>
                <div class="tracking_map-box">
                    <div class="live_track">
                        <div class="live_track-icon">
                            <iconify-icon icon="lucide:ferris-wheel" width="20" height="20"></iconify-icon>
                        </div>
                        <div class="live_track-head">Live Land Tracking</div>
                    </div>
                    <div class="tracking_stats">
                        <div class="tracking_statsL">Tracking ID :0987654321</div>
                        <div class="tracking_statsR">Tracking Status : <span>In Transit</span></div>
                    </div>
                    <div class="tracking_stats">
                        <div class="tracking_stats22">Departure : <span>Lagos</span></div>
                        <div class="tracking_stats22">Destination : <span>Abuja</span></div>
                    </div>

                    <div class="progress-container">
                        <div class="progress-container-icon">
                            <img src="./dist/images/progress-icon.png" class="img-fluid">
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" id="progressFill"></div>
                            <div class="cursor" id="cursor">
                                <div class="cursor-icon"><iconify-icon icon="mdi-light:truck" width="30" height="30"></iconify-icon></div>
                            </div>
                        </div>
                    </div>

                    <div class="package-dep-rec">
                        <div class="package-dep-received">
                            <div class="package-dep-received-details">Package Depart</div>
                            <div class="package-dep-received-date">23 / 04 / 2024 : 09 : 00am</div>
                        </div>
                        <div class="package-dep-received">
                            <div class="package-dep-received-details">Package Recieved</div>
                            <div class="package-dep-received-date">23 / 04 / 2024 :11 :00pm</div>
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