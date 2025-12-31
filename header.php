<?php
session_start();
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estore</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <div id="logo">
            <img src="" alt="">
        </div>
        <div id="navbar">
            <a href="index.php">Home</a>
            <a href="products.php">products</a>
            <a href="contact.php">contact</a>
        </div>
        <?php if (!empty($_SESSION['user'])) { ?>
            
        <div id="login_panel">
            <a href="logout.php">logout</a>
        </div>
        <?php } else { ?>
            <div id="login_panel">
            <a href="login.php">Login</a> 
             <a href="register.php">Register</a>
        </div>
        <?php } ?>
    </div>
</body>
</html>