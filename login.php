<?php include 'header.php';
?>
<div id="login_page">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <div class="username-field">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
</div>
        <br>
        <div class="password-field">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
</div>
        <br>
        <input type="submit" value="Login">
    </form>
    
</div>
<?php include 'footer.php'; ?>