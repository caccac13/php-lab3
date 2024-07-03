<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['username'] != 'admin') {
    header('location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
    <button><a style="color:#000;text-decoration:none;" href="logout.php">Logout</a></button>
</body>
</html>