<?php
session_start();
include('connect.php');

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if (!$username || !$password) {
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

// Use prepared statement to safely query the database
$stmt = $conn->prepare("SELECT Username, Password FROM admin WHERE Username = ? AND Password = ?");
if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}

$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    $msg = 'error';
    $comment = 'Error! No Information found!';
    include('index.php');
    $stmt->close();
    exit;
} else {
    $_SESSION['valid_user'] = $username;
    $stmt->close();
    header('Location: dashboard.php');
    exit;
}
?>
