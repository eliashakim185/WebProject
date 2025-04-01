<?php
session_start();
include('sql-project.php');
$new_password = $_POST['new_password'];
$confirm_new_password = $_POST['confirm_new_password'];

if ($new_password == $confirm_new_password) {
    $update = mysqli_query($conn, "UPDATE addaccount SET password='$n
	ew_password' WHERE email='{$_SESSION['email']}' AND phone='{$_SESSION['phone']}'");
}
    if ($update) {
        echo "Password reset successful";
		header('location:wel.php');
	}
 else {
    echo "Passwords do not match";
	
}


header('location: reset_password.php');
exit;
?>
