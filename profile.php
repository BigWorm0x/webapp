<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
    <h1>Your Profile</h1>
    <p>Name: <?php echo $_SESSION['name']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <a href="../login/login.html">Logout</a>
</body>
</html>
