<?php
include('sql-project.php');


if (isset($_POST['username']) && isset($_POST['password'])){
    $username = htmlentities(mysqli_real_escape_string($conn, $_POST['username']));
    $password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
	
	
	
	
	$sql = "SELECT id, username, password FROM addaccount WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row && password_verify($password, $row['password'])) {
    include('register.php');
    // ...
} else {
	include('login_progect.php');
    // Incorrect username or password
    // ...
}
if (empty($username) || empty($password)) {
    $luser_err = '<p id="error">Please insert both username and password</p><br>';
    $err_s = 1;
	include('login_progect.php');
	
} else {
    // Execute the query
    // ...
}
if (empty($password)) {
    $lpass_err = '<p id="error">Please insert a password</p><br>';
    $err_s = 1;
    // Remove the following line if not needed
     include('login_progect.php');
}



}
?>