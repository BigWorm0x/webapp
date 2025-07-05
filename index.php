<?php
session_start();
$conn = new mysqli("localhost", "root", "adolf", "wepapp");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'post') {
        $content = $_POST['content'];
        $conn->query("INSERT INTO posts (content) VALUES ('$content')");
    }
    if ($_POST['action'] === 'edit') {
        $id = $_POST['id'];
        $new = $_POST['new_content'];
        $conn->query("UPDATE posts SET content = '$new' WHERE id = $id");
    }
    if ($_POST['action'] === 'delete') {
        $id = $_POST['id'];
        $conn->query("DELETE FROM posts WHERE id = $id");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['name']; ?></h2>
    <a href="profile.php">Profile</a>

    <h3>New Post</h3>
    <form method="POST">
        <input type="text" name="content" placeholder="Write something..." required>
        <button type="submit" name="action" value="post">Post</button>
    </form>

    <h3>All Posts</h3>
    <?php
    $res = $conn->query("SELECT * FROM posts ORDER BY id DESC");
    while ($row = $res->fetch_assoc()) {
        echo "<div>";
        echo "<p>" . $row['content'] . "</p>";
        echo "<form method='POST' style='display:inline;'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <input type='text' name='new_content' placeholder='Edit text'>
                <button type='submit' name='action' value='edit'>Edit</button>
              </form>";
        echo "<form method='POST' style='display:inline;'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit' name='action' value='delete'>Delete</button>
              </form>";
        echo "</div><hr>";
    }
    ?>
</body>
</html>
