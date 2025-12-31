<?php
require 'database.php';

if (isset($_POST)) {
    $name=$phone=$email=$password="";

    if (isset($_POST['full_name']) & !empty($_POST['full_name'])) {
        $name = $_POST['full_name'];
    }else {
        header("Location: register.php?name_empty=1");
    }

$name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT) ;

    $query = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";
    $res = mysqli_query($db_connection, $query);
    if ($res) {
        header("Location: login.php");
    }else {
        echo "Error: ";  
}
}
else {
    header("Location: register.php");
}



?>