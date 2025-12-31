<?php
include 'header.php';
require "database.php";
?>
<div class="content">
    <h2>Products</h2>
    <div class="product_container">
        <?php
        $query = "SELECT * FROM products";
        $result = mysqli_query($db_connection, $query);

            while($products = mysqli_fetch_assoc($result)) {
                ?>
                <div class='product-item'>
                <h3><?php echo $products['product_name']; ?></h3>
                <p><?php echo $products['price']; ?></p>
                <p><?php echo $products['description']; ?></p>
                </div>
            <?php }?>

        