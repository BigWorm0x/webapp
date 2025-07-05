<?php
$conn = new mysqli("localhost", "root", "adolf", "wepapp");

$email = $_POST['email'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$password = $_POST['password'];

$sql = "INSERT INTO users (emailAddress, FirstName, LastName, password)
        VALUES ('$email', '$first', '$last', '$password')";

$conn->query($sql);
echo "<h3>Registration complete</h3>";
?>
<a href='../login/login.html'>Go to login</a>
