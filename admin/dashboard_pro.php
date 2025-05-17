<?php
session_start();
include('connect.php');

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

if(!$username || !$password)
{
    $msg = 'error';
    $comment = 'Both Username and Password must be provided!';
    include('index.php');
    exit;
}

if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    $msg = 'error';
    $comment = 'Wrong Email Format!';
    include('index.php');
    exit;
} 


$query = "select Username, Password from admin where Username = '$username' and Password = '$password'";
$result = mysqli_query($conn,$query);
if (!$result){
    echo 'error with your query';
    exit;
}

$num = mysqli_num_rows($result);

if ($num == 0){
    $msg = 'error';
    $comment = 'Error! No Information found!';
    include('index.php');
    exit;
}
else{
    $_SESSION['valid_user'] = $username;
    // $_SESSION['valid_name'] = $row['firstname'];
    header('location:dashboard.php');
    exit;
}


?>