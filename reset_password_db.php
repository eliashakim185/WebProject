<?php
session_start();
include('sql-project.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    if ($new_password == $confirm_new_password) {
        $update = mysqli_query($conn, "UPDATE addaccount SET password='$new_password' WHERE email='{$_SESSION['email']}' AND phone='{$_SESSION['phone']}'");

        if ($update) {
            echo "Password reset successful";
            header('location: wel.php');
            exit;
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    } else {
        echo "Passwords do not match";
    }
}
?>