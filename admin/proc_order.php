<?php
session_start();

require_once('fns.php');
require_once('PHPMailer/PHPMailerAutoload.php');

$date = date('Y-m-d h:i:s');
$token = bin2hex(random_bytes(16)); 
$Tracking_no = $_POST['tracking_no'];
$Fullnames = $_POST['fullnames'];
$Email = $_POST['email'];
$Freight_class = $_POST['freight_class'];
$Items = $_POST['items'];
$Description = $_POST['description'];
$Weight = $_POST['weight'];
$Pickup_location = $_POST['pickup_location'];
$Dropoff_location = $_POST['dropoff_location'];
$Length = $_POST['length'];
$Delivery_date = $_POST['delivery_date'];
$Status = $_POST['status'];

if ($Tracking_no == '' || $Delivery_date == '') {
    $error = 'All information are required !!!';
    include('add-order.php');
    exit;
}

include('connect.php');

$query = "insert into orders set Token = '$token', Tracking_no  = '$Tracking_no' , R_fullname = '$Fullnames' , R_email = '$Email', Freight_class = '$Freight_class', Items = '$Items',Weight = '$Weight', Pickup_location ='$Pickup_location', Dropoff_location ='$Dropoff_location', Length ='$Length', Delivery_date = '$date', Status = '$Status' ";

$result = mysqli_query($conn,$query);

if($result)
{
    $TDtoken = bin2hex(random_bytes(16)); 
    $query2 = "INSERT INTO `tracking_details`(`Token`, `Order_token`, `Description`, `Status`, `Location`, `Delivered_date`) VALUES ('$TDtoken', '$token', '$Description', '$Status', '$Pickup_location', '$date')"; 
    $result2 = mysqli_query($conn, $query2);

     $subject = 'Shipping Order Successfully Processed and Created!.';
     $body = '<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>&nbsp;</td>
<td width="600">
  <div style="font-family: Arial, sans-serif; font-size: 14px; color: #333;">
     <img src="cid:logoImage"><br><br>
      Dear '.$Fullnames.',<br><br>
      We are pleased to inform you that your shipping order has been successfully processed.<br><br>

    <strong>Tracking ID:</strong> <span style="color: #0066cc;">' . $Tracking_no . '</span><br>
    <strong>Email:</strong> ' . $Email . '<br><br>

    To track the status and progress  of your shipment, please visit our website and enter the above Tracking ID along with your email address.<br><br>

    If you have any questions or need assistance, feel free to contact our support team at <a href="mailto:support@hautlogistics.com">support@hautlogistics.com</a> or call us at (123) 456-7890.<br><br>

    Thank you for choosing Haut Logistics. We’re here to ensure your packages reach their destination safely and on time.<br><br>

    Best regards,<br>
    The Haut Logistics Team
  </div>
</td>
<td>&nbsp;</td>
</table>';

$mail = new PHPMailer();
$mail->IsSMTP();    
$mail->Port = 587;
$mail->SMTPAuth = true;               
//sendgrid
$mail->Username='notification@nitaprivateaccess.net';
$mail->Password = 'Aledoy@2025';  //yahoo app password for noreply email 
$mail->Host='mail.nitaprivateaccess.net';
$mail->SMTPSecure = 'tls'; 
$mail->From = "notification@nitaprivateaccess.net";
$mail->FromName =  "HAUT LOGISTICS";
$mail->AddAddress($Email);
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->Body    = $body;
$mail->Subject = $subject;
$mail->IsHTML(true);
$mail->AddEmbeddedImage('../dist/images/fav.png', 'logoImage'); 
$mail->Send();


    $Tracking_no = '';
    $Fullnames = '';
    $Email = '';
    $Freight_class = '';
    $Items = '';
    $Description = '';
    $Weight = '';
    $Pickup_location = '';
    $Dropoff_location = '';
    $Length = '';
    $Delivery_date = '';
    $Status = '';

    $success = 'New Order has been updated';
    include('add-order.php');
    exit;
}
else{
    $error = 'The Order with Tracking no : '.$Tracking_no.' failed to Update';
    include('add-order.php');
    exit;
}


?>