
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div id=logo>
            <img src="images/logo.png" alt="Store Logo">
        </div>
        <nav >
            
                <a href="index.php">Home</a>
                <a href="home.php">About</a>
                <a href="contact.php">Contact</a>
            
        </nav>
        <?php if (!empty($_SESSION['user'])) {?>
            <div id="logout">
                <a href="logout.php">Logout </a>
            </div>
        <?php } else { ?>
    </div id="login">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    </div>
    <?php } ?>
</body>
</html>