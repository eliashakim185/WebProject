<!doctype html>
<html>
<head>
<title>vote</title>
<style>
      .red{background-color:red;}
      .green{background-color:green;}
      .blue{background-color:blue;}
</style>
</head>
<body>

<form action="vote12.php" method="POST">

<input type="radio" name="name" value="1"> X<br>
<input type="radio" name="name" value="2"> Y<br>
<input type="radio" name="name" value="3"> Z<br>
    
<input type="submit" name="vote" value="vote" > &nbsp;&nbsp;&nbsp;&nbsp; 
<input type="submit" name="view" value="view"> 

<?php

if(isset($_POST["vote"]))
{
    $f=fopen(" D:\easy php\EasyPHP-Devserver-17\eds-www\vote12.txt","w");
    if($f)
    {
        $text=$_POST["name"]."\n";
        fputs($f,$text);
        fclose($f);
    }
}  

if(isset($_POST["view"]))
{
    $fr=fopen(" D:\easy php\EasyPHP-Devserver-17\eds-www\vote12.txt","r");
   
        if($fr)
    {  $count=0;
        $x=0;
        $y=0;
        $z=0;
       while(! feof($fr))
       {
          $line = fgets($fr,10);
         
              if($line == 1)
                  { $count ++; $x+=1;}
                   if($line == 2)
                 {$count ++;  $y+=1;}
                   if($line == 3)
                   {$z+=1; $count ++;}
       }  ;

        fclose($fr);
    }
    $xper= number_format(($x * 100 /$count) ,2 );
    $yper= number_format(($y * 100 /$count) ,2 );
    $zper= number_format(($z * 100 /$count) ,2 );
   /* echo " <br> X : $xper % votes of $count<br>  
               Y : $yper % votes of $count<br>
                Z : $zper % votes of $count<br> ";*/

     /*  echo "<br>
      X: <progress max=\"100\" value= $xper ></progress> $xper % votes of $count <br>   
      Y: <progress max=\"100\" value= $yper ></progress> $yper % votes of $count <br>   
       Z:<progress max=\"100\" value= $zper ></progress> $zper % votes of $count <br> 
          ";         

    */

   /*  echo "<br><br>
            <table border=1 width=\"200px \" > 
            <tr  >  <td class=\"red\" width=\" $xper %\">&nbsp; </td> 
              <td class=\"blue\" width=\" $yper %\" > &nbsp; </td> 
              <td class=\"green\" width=\" $zper %\"> &nbsp; </td> </tr>
                  
            </table>
    ";*/

   /* echo "<br><br>
            <table> <tr>  <td class=\"red\" width=\" $xper %\">&nbsp; </td> <td> x : $xper % votes of $count </td> </tr></table  >
            <table>   <tr>   <td class=\"blue\" width=\" $yper %\" > &nbsp; </td> <td> y : $yper %  votes of $count </td>  </tr></table>
            <table> <tr>   <td class=\"green\" width=\" $zper %\"> &nbsp; </td> <td> z : $zper % votes of $count </td>  </tr>
                  
            </table>
    ";  */

    $max_perc = max($xper,$yper,$zper);

    switch($max_perc)
    {
        case $xper : $max_name="X";  break;
        case $yper : $max_name="Y";  break;
        case $zper : $max_name="Z";  break;
        
    }
    echo "<br><br>
    <table> <tr>  <td class=\"red\" width=\" $xper %\">&nbsp; </td> <td> x : $xper % votes of $count </td> </tr></table  >
    <table>   <tr>   <td class=\"blue\" width=\" $yper %\" > &nbsp; </td> <td> y : $yper %  votes of $count </td>  </tr></table>
    <table> <tr>   <td class=\"green\" width=\" $zper %\"> &nbsp; </td> <td> z : $zper % votes of $count </td>  </tr>
          
    </table>
    <p> till now $max_name is the winner   </p>
";

}


?>
</form>



</body>
</html>