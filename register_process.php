<?php
session_start();
require_once "db.php"; // your database connection file



$name=$_POST['name'];
$phone=$_POST['Phone'];
$email=$_POST['Email'];
$password=$_POST['Password'];

$query = "INSERT INTO users (FullName, Phone, Email, Password) VALUES ('$name', '$phone', '$email', '$password')";
if (mysqli_query($db_connection, $query)) {
    echo "New record created successfully";
    header("Location: login.php"); // Redirect to login page after successful registration
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db_connection);
}
mysqli_close($db_connection);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Create Account</h2>

<?php if (!empty($errors)): ?>
    <div class="error">
        <?php foreach ($errors as $e): ?>
            <p><?= htmlspecialchars($e) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if ($success): ?>
    <div class="success">
        <p><?= htmlspecialchars($success) ?></p>
    </div>
<?php endif; ?>

<form method="post" action="">
    <label>Name</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars($name ?? "") ?>" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="<?= htmlspecialchars($email ?? "") ?>" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="login.php">Login here</a></p>

</body>
</html>