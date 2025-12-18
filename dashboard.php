<?php
include 'header.php';
?>
<div class ="content"></div>
    <?php
  $user = $_SESSION['user'];
    if ($user === 'admin') {
        echo "<h2>Admin Dashboard</h2>";
        echo "<p>Welcome, Admin! Here you can manage the website.</p>";
    } elseif ($user === 'Customer') {
        echo "<h2>Customer Dashboard</h2>";
        echo "<p>Welcome, Customer! Here you can view your orders and profile.</p>";
    } else {
        echo "<h2>Dashboard</h2>";
        echo "<p>Please log in to access your dashboard.</p>";
    }
  ?>
    <?php include 'footer.php'; ?>
</div>