<?php
session_start();
include 'sql-project.php';
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $query="select * from addaccount where email='$email' and phone='$phone'";
    $result=mysqli_query($conn,$query);
    $nbrows = mysqli_num_rows($result);
    if($nbrows == 0){
        header('Location:forget.php');
    }
 else {
	 $_SESSION['email'] =$email;
		$_SESSION['phone'] =$phone;
		
        header('Location:reset_password.php');
		

        }
?>
