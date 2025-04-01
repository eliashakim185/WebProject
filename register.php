<!DOCTYPE html>
<html>

<head>
<style>
   #error{
        
        color: red; 
		
        
    }
</style>
    <title>sign in Page</title>
    <link rel='stylesheet' href='css/style_project.css'>
</head>
<form action="register_post.php" method="post">
<body>
    
        
            <?php if (isset($user_error)) {
                echo $user_error;
            } ?>
            <input type="text" name="username" placeholder="Enter username"><br>

            <?php if (isset($email_error)) {
                echo $email_error;
            } ?>
			<h4>email:</h4>
            <input type="text" name="email" placeholder="Mobile number or email"><br>

            <?php if (isset($pass_error)) {
                echo $pass_error;
            } ?>
			<h4>password:</h4>
            <input type="password" name="password" placeholder="New password"><br>
			<h4>confirm password:</h4>
			  <?php if (isset($confirm_error)) {
                echo $confirm_error;
            } ?>
			<input type="password" name="confirm_password"  placeholder="confirm password">
            <h4>Gender:</h4>
            <?php if (isset($gender_error)) {
                echo $gender_error;
            } ?>
            <select name="gender" title="Choose male or female">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <br>

            
			<?php if (isset($phone_error)) {
                echo $phone_error;
            } ?>
			<h4>phone:</h4>
			
			<input type="number" name="phone">
            
            <br>

            <input type="submit" name="submit" value="Done"><br>
        
    </form>

    <h1>or</h1>
    <a href="login_project.php">Login</a>
    <br><br>

  
</body>

</html>
