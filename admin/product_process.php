<?php
require "../database.php";
 $name = $_POST['product_name'];
 $description = $_POST['description'];          
    $price = $_POST['price'];  
    $query = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";
    $res= mysqli_query($db_connection, $query);
    if($res){
        echo "Product added successfully.";
    } else {
        echo "Error adding product: " . mysqli_error($db_connection);
    }