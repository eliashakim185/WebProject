<?php 
include('sql-project.php');
$err_s=0;

if(isset($_POST['submit'])){
    $username =  $_POST['username'];
    $email =  $_POST['email'];
$password =  $_POST['password'];
$confirm_password=$_POST['confirm_password'];
$phone=$_POST['phone'];

  


$security = md5($password);

    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
       
        if(!in_array($gender, ['male', 'female'])){
            $gender_error = '<p id="error">Please choose gender not a text!</p><br>';
            $err_s = 1;        
        }
    }

    $check_user = "SELECT * FROM addaccount WHERE username='$username'"; 
    $check_result = mysqli_query($conn, $check_user);
    $num_rows = mysqli_num_rows($check_result);

    if($num_rows != 0){
        $user_error = '<p id="error">The name is already used, please choose another one.</p><br>';
    }

    if(empty($username)){
        $user_error = '<p id="error">Please enter a username</p><br>';
        $err_s = 1;
    } elseif(strlen($username) < 6){
        $user_error = '<p id="error">Your username needs to have a minimum of 6 letters</p><br>';
    } elseif(filter_var($username, FILTER_VALIDATE_INT)){
        $user_error = '<p id="error">Please enter a valid username, not a number</p><br>';
        $err_s = 1;
    }

    if(empty($email)){
        $email_error = '<p id="error">Please insert an email</p><br>';
        $err_s = 1;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) || !is_string($email)){
        $email_error = '<p id="error">Please enter a valid email</p><br>';
    }

    if(empty($gender)){
        $gender_error = '<p id="error">Please choose gender</p><br>';
        $err_s = 1;
    }
	if(empty($phone)){
		$phone_error = '<p id="error">Please enter number</p><br>';
        $err_s = 1;
	}

   

    if(empty($password)){
        $pass_error = '<p id="error">Please insert a password</p><br>';
        $err_s = 1;
        include('register.php');
    } elseif(strlen($password) < 6){
        $pass_error = '<p id="error">Your password needs to have a minimum of 6 letters</p><br>';
        $err_s = 1;
        include('register.php');
	}elseif($confirm_password != $password){
		$confirm_error='<p id="error">incorect password</p><br>';
		$err_s=1;
		include('register.php');
    } else {
        if(($err_s == 0) && ($num_rows == 0)){
            $sql = "INSERT INTO `addaccount`( `username`, `password`, `gender`, `email`,`phone`)
        VALUES ('$username', '$password','$gender', '$email','$phone')";


            mysqli_query($conn, $sql);
                header('location:login_project.php');
            

        } else {
            include('register.php');
        }
    }
}
?>