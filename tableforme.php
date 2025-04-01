<html>


<body>



<form>

<br>


name<input type=" text" name="lname" value="<?PHP if(isset($_GET["lname"])) echo$_GET[ "lname"]; ?>"> 
<br>
<br>

<label>fname<input type=" text" name="fname"value="<?php if(isset($_GET["lname"])) echo $_GET["fname"]?>">
<br>
<br>
<label>county<select>
<?php 
$s1=array("elias","hakim","charbel");


	for( $s=0;$s<count($s1);$s++)
	{
		
	echo <option value="s1[$s]"<?php if(isset($_GET["S1[$s]"])&& $_GET["s1"]==s1[$s])) echo "selected";?>>$s1[$s]</option>;
}

?>
</select>

<br>
<br>
<label>genter <input type="radio"name="g" value="male"<?php if(isset($_GET["g"])&& $_GET["g"]=="male")echo "checked";?>>male
<input type="radio"name="g"value="femal"<?php if(isset($_GET["g"])&& $_GET["g"]=="femal")echo "checked";?>>femal</label>
<br>
<br>
<label>stiuation <input type="radio"name="s" value="single"<?php if(isset($_GET["s"])&& $_GET["s"]=="single") echo"checked";?>>single
<input type="radio"name="s" value="mar"<?php if(isset($_GET["s"])&& $_GET["s"]=="mar")echo "checked";?>>mar</label>
<br>
<br>
<label>hobies <input type="checkbox"name="h" value="sptr"<?php if(isset($_GET["h"])&& $_GET["h"]=="sptr")echo "checked";?>>sptr
<input type="checkbox"name="h"value="mar" <?php if(isset($_GET["h"])&& $_GET["h"]=="mar")echo "checked";?>>mar</label>
<br><br>
<center><input  type="submit" name="send" value="send"> </center>
<?php if (isset ($_GET["send"]))

{
	
		echo $_GET["lname"];
		echo "<br>";
		echo $_GET["fname"];
				echo "<br>";

		
		
		//echo $_GET["s1"];
		echo $_GET["g"];
				echo "<br>";

		echo $_GET["s"];
		echo "<br>";
		echo $_GET["h"];
}
?>

</form>
</body>
</html>