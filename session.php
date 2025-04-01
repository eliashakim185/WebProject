<?php 

// Start the session
session_start();

// Assuming this is part of your form processing logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    // Validate and authenticate the user - perform necessary checks here

    // If validation is successful, store the username in the session
    $_SESSION['username'] = $username;

    // Redirect to another page or display a success message
    header('Location: welcome.php');
    exit();
}
?>

<!-- Your HTML form with the username input -->
<form method="post" action=".php">
    <label for="username">Username:</label>
    <input type="text" name="username" placeholder="Enter username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
    <input type="submit" value="Submit">
</form>
?>