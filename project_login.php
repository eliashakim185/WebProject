<html>
<head>
		<title>login page </title>
							<link rel='stylesheat' hred="css/style_project.css">


</head>
<form action="<?php $_PHP_SELF ?>" methode="post">
	<body>
	<div class="main">
	
			<input type="text" name="username" placeholder="enter username"><br>
			<input type="text" name="email" placeholder="mobiel number or email"><br>
            <input type="password" name="password" placeholder="new password"><br>
			gender : <select><option> male</option>
			<option> female</option>
			</select>
			<br>
<label for="month">Month:</label>
    <select name="month" id="month">
        <?php
        $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        foreach($months as $index => $month) {
            echo '<option value="' . ($index + 1) . '">' . $month . '</option>';
        }
        ?>
    </select>
    
    <label for="day">Day:</label>
    <select name="day" id="day">
        <?php
        for($i = 1; $i <= 31; $i++) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }
        ?>
    </select>
    
    <label for="year">Year:</label>
    <select name="year" id="year">
        <?php
        $currentYear = date("Y");
        for($i = $currentYear; $i >= $currentYear - 100; $i--) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }
        ?>
    </select>
	<br>
	
	            <input type="submit" name="submit" value="done"><br>
				</form>
				<h1>or</h1>
				<a href="http://127.0.0.1/login_progect.php">login</a>

    
    <br><br>
    

<?php
if(isset($_GET["submit"])) {
    $selectedMonth = $_GET["month"];
    $selectedDay = $_GET["day"];
    $selectedYear = $_GET["year"];
	$selectusername=$_GET["username"];
	$selectemail=$_GET["email"];
	
		echo "merci  ".  $selectusername."  now you have account  "."  in email:  ".$selectemail;
	//echo "merci " $selectusername "for all information and u have an new account ";
    echo "Selected Date: " . $selectedMonth . "/" . $selectedDay . "/" . $selectedYear;

}
?>


</div>
	</body>

</html>