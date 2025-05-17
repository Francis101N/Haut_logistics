<?php

include('connect.php');

function decode($encodedId) {
    // Add back missing padding if needed
    $padding = strlen($encodedId) % 4;
    if ($padding > 0) {
        $encodedId .= str_repeat('=', 4 - $padding);
    }

    return base64_decode(strtr($encodedId, '-_', '+/'));
}

if($_GET['id'])
{
    $id = decode($_GET['id']);
    $query = "delete from orders where id = '$id'";
    $result = mysqli_query($conn,$query);
}

if($result)
{
   $success = 'Order has been removed Successfully!';
   include('order.php');
   exit;
}else{
   echo 'error deleting';
}
?>