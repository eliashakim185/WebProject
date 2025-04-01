<?php
if (isset($_GET["submit"])) {
    $message = "Hello"." " ;

    if (isset($_GET["states"])) {
        $message = $message . $_GET["states"] . " ";
    }
    if (isset($_GET["fname"])) {
        $message = $message . $_GET["fname"] . " ";
    }
    if (isset($_GET["lname"])) {
        $message = $message . $_GET["lname"] . " ";
    }
    if (isset($_GET["country"])) {
        $message = $message . "you are from " . $_GET["country"] . " ";
    }
    if (isset($_GET["s"])) {
        $hobbies = $_GET["s"];
        $counter = count($hobbies);
        $message = $message . "you like ";
        for ($i = 0; $i < $counter; $i++) {
            $message = $message . $hobbies[$i] . " and ";
        }
    }
    $message = $message . " I respect you .";
    if (isset($message) && strlen($message) != 0) {
        echo $message;
        echo "<hr>";
        //$message = "";
        //echo $message;
       // unset($message);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="">
        <label>First Name:</label>
        <input type="text" name="fname" value="<?php if (isset($_GET["fname"])) echo $_GET["fname"] ?>">

        <br>
        <br>

        <label>Last Name:</label>
        <input type="text" name="lname" value="<?php if (isset($_GET["lname"])) echo $_GET["lname"] ?>">

        <br>
        <br>

        <label>Country:</label>
        <select name="country">
        <option value="">Choose</option>

        <?php 
            $countries = array("Choose", "Lebanon", "Syria", "Palestine", "Ukraine", "Italy");

            //for($i = 0; $i < sizeof($countries); $i++){
            //    echo "<option value=\"<?php if (isset(" . $_GET["country"]) && $_GET["country"] == "Lebanon") echo " selected"; 
            //    }    ?> 
        ?>

        
            <option value="Lebanon" <?php if (isset($_GET["country"]) && $_GET["country"] == "Lebanon") echo " selected"; ?>>Lebanon</option>
            <option value="Syria" <?php if (isset($_GET["country"]) && $_GET["country"] == "Syria") echo " selected"; ?>>Syria</option>
            <option value="Palestine" <?php if (isset($_GET["country"]) && $_GET["country"] == "Palestine") echo " selected"; ?>>Palestine</option>
            <option value="Ukraine" <?php if (isset($_GET["country"]) && $_GET["country"] == "Ukraine") echo " selected"; ?>>Ukraine</option>
   </select>
        <br>
        <br>

        <label>States:</label>

        <label>Mr</label>
        <input type="radio" name="states" value="Mr" <?php if (isset($_GET["states"]) && $_GET["states"] == "Mr") echo " checked" ?>>
        <label>Mrs</label>
        <input type="radio" name="states" value="Mrs" <?php if (isset($_GET["states"]) && $_GET["states"] == "Mrs") echo " checked" ?>>
        <label>bebe</label>
        <input type="radio" name="states" value="Bebe" <?php if (isset($_GET["states"]) && $_GET["states"] == "Bebe") echo " checked" ?>>

        <br>
        <br>

        <label>Hobbies:</label>

        <label>Football</label>
        <input type="checkbox" value="fatbol" name="s[]" <?php if (isset($_GET["s"]) && in_array("fatbol", $_GET["s"])) echo " checked" ?>>
        <label>Swimming</label>
        <input type="checkbox" value="swimming" name="s[]" <?php if (isset($_GET["s"]) && in_array("swimming", $_GET["s"])) echo " checked" ?>>
        <label>Basketball</label>
        <input type="checkbox" value="basketball" name="s[]" <?php if (isset($_GET["s"]) && in_array("basketball", $_GET["s"])) echo " checked" ?>>

        <br>        <br>
        <center><input type="submit" name="submit" value="submitttttttttt"></center>
		<input type="file"  name="name_files[]">

    </form>
</body>
<?php
if (isset($_GET["submit"])) {
    $message = "Hello"." " ;

    if (isset($_GET["states"])) {
        $message = $message . $_GET["states"] . " ";
    }
    if (isset($_GET["fname"])) {
        $message = $message . $_GET["fname"] . " ";
    }
    if (isset($_GET["lname"])) {
        $message = $message . $_GET["lname"] . " ";
    }
    if (isset($_GET["country"])) {
        $message = $message . "you are from " . $_GET["country"] . " ";
    }
    if (isset($_GET["s"])) {
        $hobbies = $_GET["s"];
        $counter = count($hobbies);
        $message = $message . "you like ";
        for ($i = 0; $i < $counter; $i++) {
            $message = $message . $hobbies[$i] . " and ";
        }
    }
    $message = $message . " I respect you .";
    if (isset($message) && strlen($message) != 0) {
        echo $message;
        echo "<hr>";
        //$message = "";
        //echo $message;
       // unset($message);
    }
}


?>


</html>
