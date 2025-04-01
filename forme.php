<<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible " content="IE-edfe">
<meta name="viewport" content ="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="index.php" method="get">
			 <input type ="text" name= "username">
			 			 <input type ="password" name= "pass">
						 <input type="submit" value="log in">
						 
						 </form>
</body>
	
</html>
<?php
 echo $_GET["pass"];
 ?>
 




 