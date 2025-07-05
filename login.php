<?php
session_start();
$conn = new mysqli("localhost", "root", "adolf", "wepapp");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE emailAddress = '$email'";
$result = $conn->query($sql);

if ($result && $result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if ($password == $user['password']) {
        $_SESSION['email'] = $user['emailAddress'];
        $_SESSION['name'] = $user['FirstName'];
        header("Location: ../main/index.php");
        exit;
    } else {
        echo "Wrong password.";
    }
} else {
    echo "Email not found.";
}
