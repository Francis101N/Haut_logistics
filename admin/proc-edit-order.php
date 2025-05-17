<?php

session_start();
include('connect.php');
require_once('PHPMailer/PHPMailerAutoload.php');

$Tracking_no = $_POST['tracking_no'];
$Fullnames = $_POST['fullnames'];
$Email = $_POST['email'];
$Freight_class = $_POST['freight_class'];
$Items = $_POST['items'];
$Description = $_POST['description'];
$Weight = $_POST['weight'];
$Current_location = $_POST['current_location'];
$Length = $_POST['length'];
$Delivery_date = $_POST['delivery_date'];
$Status = $_POST['status'];
$Order_token = $_POST['token'];

$query = "UPDATE orders SET Tracking_no = '$Tracking_no', R_fullname = '$Fullnames', R_email = '$Email', Freight_class = '$Freight_class', Items = '$Items', Weight = '$Weight', Length = '$Length', Delivery_date = '$Delivery_date', Status = '$Status' WHERE Token = '$Order_token'";
$result = mysqli_query($conn, $query);

if ($result) {
    // Fetch the status to check if it's delivered
    $statusQuery = "SELECT Status FROM orders WHERE Token = '$Order_token'";
    $statusResult = mysqli_query($conn, $statusQuery);

    if ($statusResult && mysqli_num_rows($statusResult) > 0) {
        $Statusrow = mysqli_fetch_array($statusResult);
    } else {
        echo "Error fetching status or no results found.";
        exit;
    }

    $TDtoken = bin2hex(random_bytes(16));
    $query2 = "INSERT INTO `tracking_details`(`Token`, `Order_token`, `Description`, `Status`, `Location`, `Delivered_date`) 
               VALUES ('$TDtoken', '$Order_token', '$Description', '$Status', '$Current_location', '$Delivery_date')";
    $result2 = mysqli_query($conn, $query2);

    if ($result2) {
        // $success = 'Changes have been updated';
        include('order.php');
    } else {
        $error = 'Failed to insert tracking details';
        include('edit_order.php');
    }

    // If the status is 'Delivered', send email
    if ($Statusrow['Status'] == 'Delivered') {
        $subject = 'Your Package Has Been Delivered – Track for Pickup Details!';
        $body = '<table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>&nbsp;</td>
                        <td width="600">
                            <div style="font-family: Arial, sans-serif; font-size: 14px; color: #333;">
                                <img src="cid:logoImage"><br><br>
                                <p> Dear ' . $Fullnames . ',</p>
                                <p>We’re pleased to inform you that your package has been <strong>successfully delivered</strong>.</p>
                                <p>To find out the exact pickup location and further details, please log in to your account using your tracking number:</p>
                                <p>Thank you for choosing Haut Logistics.</p>
                                <br><br>Best regards,<br>
                                The Haut Logistics Team
                            </div>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                </table>';

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 2; // Enable debugging
        $mail->Username = 'notification@nitaprivateaccess.net';
        $mail->Password = 'Aledoy@2025';
        $mail->Host = 'mail.nitaprivateaccess.net';
        $mail->SMTPSecure = 'ssl';
        $mail->From = 'notification@nitaprivateaccess.net';
        $mail->FromName = 'HAUT LOGISTICS';
        $mail->AddAddress($Email);
        $mail->CharSet = 'UTF-8';
        $mail->IsHTML(true);
        $mail->Body = $body;
        $mail->Subject = $subject;

        $mail->AddEmbeddedImage('../dist/images/fav.png', 'logoImage'); 

        if ($mail->Send()) {
            echo 'Email sent successfully!';
        } else {
            echo 'Failed to send email: ' . $mail->ErrorInfo;
        }
    } else {
        echo 'Order not delivered, email not sent.';
    }
} else {
    $error = 'The Order with Tracking no: ' . $Tracking_no . ' failed to update';
    include('edit_order.php');
}

?>