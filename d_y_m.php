<html>
<head>
    <title>Date Selection Form</title>
</head>
<body>

<form method="POST" action="">
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
    
    <br><br>
    
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST["submit"])) {
    $selectedMonth = $_POST["month"];
    $selectedDay = $_POST["day"];
    $selectedYear = $_POST["year"];

    echo "Selected Date: " . $selectedMonth . "/" . $selectedDay . "/" . $selectedYear;
}
?>

</body>
</html>
