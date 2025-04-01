<?php  
						$text =$_GET["t"] ."\n";
						$fp=fopen("file.txt"."a+");
						fputs($fp,$text);
						fclose($fp);
						echo"<h1>thanks for your submition</h1.";
						echo '<a href="file.php">home</a>';?>