<?php

function token($length = 32) {
    return bin2hex(random_bytes($length));
}

  function generate_tracking()
{
    $udate = date('m');
    $num2 = rand(10000,99999);
    $alpha = array('A','B','F','Q','D');
    shuffle($alpha);
    $tracking = $alpha[0].$udate.$num2;

    return $tracking;

}

   function get_delivery_time($token)
{
    global $conn;
    $query = "select * from tracking_details where Status = 'Delivered' and Order_token = '$token'";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
    if($num > 0)
    {
        $row = mysqli_fetch_array($result);
        return date('d M Y : h:i:a',strtotime($row['Date_created']));
    }
    else{
        return 'No';
    }

}

function get_progress($token)
{
    global $conn;
    $query = "select * from `orders` where Token = '$token'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    
    $status = ($row['Status']);

    if($status == 'Pending')
    {
        return 10;
    }
    elseif($status == 'In Transit')
    {
        return 50;
    }
    elseif($status == 'Destination')
    {
        return 90;
    }
    elseif($status == 'Delivered')
    {
        return 98;
    }
    else{
        return 0;
    }
}
  
    function get_category_name($cat_id)
    {
        global $conn;
        $query = "select * from categories where id = '$cat_id'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        $cat_name = $row['cat_name'];
        return $cat_name;
    }

    function cart_item($order_id)
    {
        global $conn;
        $query = "select * from cart where order_id = '$order_id'";
        $result = mysqli_query($conn,$query);
        $num = mysqli_num_rows($result);
        return $num;
    }

    function cart_sub_total($order_id)
    {
        global $conn;
        $query = "select sum(total_price) from cart where order_id = '$order_id'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

    function shipping_cost($state)
    {
        if(!$state)
        {
            return 0;

        }
        elseif($state == 'Lagos')
        {
            return 2000;

        }
        elseif($state == 'Ogun' || $state == 'Oyo')
        {
            return 6000;
        }
        else{
            return 10000;
        }
    }


    function grand_total($order_id,$state)
    {
        $sub_total = cart_sub_total($order_id);
        $shipping = shipping_cost($state);

        $grand_total = $sub_total+$shipping;
        return $grand_total;
    }

    function now()
    {
        $now = date('Y-m-d h:i:s');
        return $now;
    }

    function get_image($id)
    {
        global $conn;
        $query = "select * from products where id = '$id'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        return $row['image_1'];
    }

    function mydate($date)
    {
        $new_date = date('d M Y h:ia', strtotime($date));
        return $new_date;
    }



?>