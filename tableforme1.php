<html>
<head>
    <title>Form</title>
</head>
<body>

<form method="GET" action="">
    <br>
    Name: <input type="text" name="lname" value="<?php if(isset($_GET["lname"])) echo $_GET["lname"]; ?>">
    <br><br>
    First Name: <input type="text" name="fname" value="<?php if(isset($_GET["fname"])) echo $_GET["fname"]; ?>">
    <br><br>
    County:
    <select name="county">
        <?php 
        $counties = array("elias", "hakim", "charbel");
        foreach($counties as $county) {
            echo '<option value="' . $county . '" ' . (isset($_GET["county"]) && $_GET["county"] == $county ? "selected" : "") . '>' . $county . '</option>';
        }
        ?>
    </select>
    <br><br>
    Gender:
    <label><input type="radio" name="g" value="male" <?php if(isset($_GET["g"]) && $_GET["g"] == "male") echo "checked"; ?>> Male</label>
    <label><input type="radio" name="g" value="female" <?php if(isset($_GET["g"]) && $_GET["g"] == "female") echo "checked"; ?>> Female</label>
    <br><br>
    Situation:
    <label><input type="radio" name="s" value="single" <?php if(isset($_GET["s"]) && $_GET["s"] == "single") echo "checked"; ?>> Single</label>
    <label><input type="radio" name="s" value="mar" <?php if(isset($_GET["s"]) && $_GET["s"] == "mar") echo "checked"; ?>> Married</label>
    <br><br>
    Hobbies:
    <label><input type="checkbox" name="h[]" value="sport" <?php if(isset($_GET["h"]) && in_array("sport", $_GET["h"])) echo "checked"; ?>> Sport</label>
    <label><input type="checkbox" name="h[]" value="music" <?php if(isset($_GET["h"]) && in_array("music", $_GET["h"])) echo "checked"; ?>> Music</label>
    <br><br>
    <center><input type="submit" name="send" value="send"></center>
</form>

<?php
if (isset($_GET["send"])) {
    echo $_GET["lname"] . "<br>";
    echo $_GET["fname"] . "<br>";
    echo $_GET["county"] . "<br>";
    echo $_GET["g"] . "<br>";
    echo $_GET["s"] . "<br>";
    if(isset($_GET["h"])) {
        echo implode(", ", $_GET["h"]) . "<br>";
    }
}
?>

</body>
</html>
