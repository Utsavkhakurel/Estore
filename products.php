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
                <p><img src="<?php echo $products['image_url']; ?>" alt="<?php echo $products['product_name']; ?>" /></p>
                <form method="POST" action="add-cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $products['id']; ?>" />
                    <input type="number" name="quantity" value="1" min="1" />
                    <button type="submit">Add to Cart</button>
                </div>
            <?php }?>

        