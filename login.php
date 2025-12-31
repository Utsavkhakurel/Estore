<?php include "header.php"; ?>

<div id="login_page">
    <form action="login_process.php" method="post">
        <div>
            <label for="email">Username:</label>
            <input type="text" id="email" name="email" required>
        
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <input type="submit" value="Login">
    </div>
        
    </form>
</div>