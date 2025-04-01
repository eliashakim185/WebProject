else {
        $check_user = "SELECT * FROM addaccount WHERE username='$username'"; 
        $check_result = mysqli_query($conn, $check_user);
        $num_rows = mysqli_num_rows($check_result);

        if ($num_rows == 0) {
            $luser_err = '<p id="error">The username is incorrect</p><br>';
            $err_s = 1;
        } else {
            $luser_done = '<p id="done">Correct username</p><br>';
        }
}
else {
        $check_pass = "SELECT * FROM addaccount WHERE password='$password'"; 
        $check_result_pass = mysqli_query($conn, $check_pass);
        $num_rows_pass = mysqli_num_rows($check_result_pass);

        if ($num_rows_pass == 0) {
            $lpass_err = '<p id="error">The password is incorrect</p><br>';
            $err_s = 1;
        } else {
            $lpass_done = '<p id="done">Correct password</p><br>';
        }
    }

    if ($err_s == 0) {
        // Include additional actions if login is successful
        include('login_db.php'); 
    }
}