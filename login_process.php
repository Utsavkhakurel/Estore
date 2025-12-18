<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if ($username === 'admin' && $password === 'password123') {
    $_SESSION['user'] = "admin";
    header("Location: dashboard.php");
} elseif ($username == 'Customer' && $password =='1235') {
    $_SESSION['user'] = "Customer";
    header("Location: dashboard.php");
} else {
    echo "Invalid username or password. Please try again.";
}
?>