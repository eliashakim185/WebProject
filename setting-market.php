<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
    $username = $_SESSION['username'];

    $sql = "UPDATE users SET password = '$newPassword' WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result) {
        echo 'Password updated successfully.';
    } else {
        echo 'Error: ' . $conn->error;
    }
}
?>

<html>
<body>
    <h1>Settings</h1>
    <form method="post" action="settings.php">
        New Password: <input type="password" name="newPassword" required><br>
        <input type="submit" value="Update Password">
    </form>
</body>
</html>
