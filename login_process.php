<?php
$username = $_POST['username'];
$password = $_POST['password'];
if ($username === 'admin' && $password === 'password123') {
    header('Location: home.php');
    exit();
} else {
    echo "Invalid username or password. Please try again.";
}