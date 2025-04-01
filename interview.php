<?php

function sumprice($arr){

$s=[];
$j=0;
foreach($arr as $key => $val){
    foreach($arr2 as $key2 => $val2){
            if($key=="price"){
                $s

            }

    }

        if($key=="price"){

        $s[$j]=$val;
        $j++;
    }
}
$sum=0;
for($i=0;$i<=strlen($s);$i++){

        $sum += $s[$i];
}
return $sum;
}



$array2=array("price"=>2);
$array1= array("price"=>3,"joseph"=>"hakim","price"=>4,"php"=>$array2);
$s=sumprice($array1);

echo $s;

?>