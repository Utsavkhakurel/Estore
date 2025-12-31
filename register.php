<?php include 'header.php';?>
<div class="content">
    <form action="register_process.php" method="post">
        <div></div>
        <div>
            <label>Name</label>
            <input type="text" id="full_name" name="full_name">
            <?php 
                if (isset($_GET['name_empty']) && !empty($_GET['name_empty'])); { ?>
                <span id="error">please enter your full name</span>
                <?php } ?>
        </div>
        <div>
            <label>phone</label>
            <input type="number" id="phone" name="phone">
        </div>
        <div>
            <label for="username">Email:</label>
            <input type="email" id="email" name="email" >
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
        </div>
        <div>
            <input type="submit" value="Register" id="register-btn">
        </div>

    </form>
</div>
<?php
include 'footer.php';
?>