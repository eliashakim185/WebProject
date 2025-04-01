
<?php
$person =array('name'=>'elias','lastname'=>'hakim','age'=>13);
$numb=array(1,2,3,4,5,5);
$n ;//= array(6,7,8,9);
print_r($numb);

foreach($person as $key=>$elem){
		echo"<br> $key : $elem <br>";
}		

echo"<br>";
rsort($numb);
print_r($numb);
shuffle($numb);
echo"<br>";
for($i=0;$i<5;$i++)
	echo "$numb[$i] ";
print_r($numb);

	$i=array_values($numb);
	echo "<br>";
	print_r($i);
	echo"<br>";
	$i2=array_count_values($numb);
	
	print_r($i2);
	$val="hakim";
	echo"<br>";
	$i3=array_search($val,$person);
	echo $i3;
	print_r($i3);
	$i4=each($person);
	echo"<br>";
	print_r($i4);
	

?>