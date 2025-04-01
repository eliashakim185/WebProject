<?php n
		if(file_exists("file.txt")) {
				$fp=fopen("file.txt","r");
				$text .=fgets($fp,255)."br";
		
				
					fclose($fp);
					echo'<br><br><center> <h1>'.$text.'</h1></center>';
					echo '<a href="file.php" > home </a>';
		}
						else
						
						{
							echo'<br><br><center><h1>404 empty file</h1></center>';
						}
					
						
						?>