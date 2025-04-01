<!doctype html>
<html>
<head>
<title>date regular expression</title>

</head>
<body>
<form action="reg_date.php" method="POST">

<input name="txt" type ="text" size="20" maxlength="200" ></td>
<input type="submit" name="verify" value="verify">


</form>
<?php
if(isset($_POST["verify"]))
{$text=$_POST["txt"];
 
$date30="^(0?[1-9]|[1-2][0-9]|30)\-([469]|11)\-[0-9]{4}$";
$date31="^(0?[1-9]|[1-2][0-9]|3[0-1])\-([13578]|10|12)\-[0-9]{4}$";
$date28="^(0?[1-9]|[1][0-9]|[2][0-8])\-[2]\-[0-9]{4}$";

$date="($date30|$date31|$date28)";
if(@ereg($date,$text))
   {echo "$date";}
else{ echo "date not valid";}
  
unset($text);
}
?>

</body>
</html>