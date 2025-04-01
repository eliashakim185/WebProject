<html>
<head>

</head>
<body>
<h1>
elias hakim </h1>
<?php /*
$vp1=array('elias','zahle',1);
$vp2=array('elias','zahle',4);
$vp3=array('elias',"zahle",14);

//$p = array('name','vill','age');
$vp= array($vp1,$vp2,$vp3);
$p=array("p1","p2","p3");
$tabel = array( $p =>  $vp);
foreach($tabel as $key => $elem){
	for($i=0;$i<3;$i++) 
	
		
	{for($j=0;$j<3;$j++){
		
		echo"$key[$j] : $elem[$i]";
	}
	}
}*/
$tap =array('name'=>'elias','age'=>13);
$i=0;
/*while($i<count($tap)){
	echo $tap[$i]."<br>";
	$i++;
}
$t=array('name','lastname','age');
//$f=array($t=>$tap);*/
foreach( $tap as $key=> $elem){
	
	echo "$key :$elem<br>";
}
$p=array('p1','p2','p3');
$id=array('name','lastname','age');
$sum= array('p1' =>array('elias','hakim','age'));
foreach($sum as $k1 => $el){
	for($i=0;$i<3;$i++)
		echo"$k1 : $el[$i]<br>";
};


?>
 
</body>

</html>



