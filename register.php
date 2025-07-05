<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h2 style="text-align:center;">Register</h2>
    <form action="register.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    <a href="../login/login.html">Login</a>
</body>
</html>
