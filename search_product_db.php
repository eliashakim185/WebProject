<?php

session_start();
include('sql-project.php');
$er_s=0;
?>

<?php

if(isset($_POST['done']) ){
    if(empty($_POST['search_product'])|| empty($_POST['number_product']))
    {   
        $err='enter all information';
        $er_s=1;
       // include('search_product.php');



    }
}

$directory = 'D:\easy php\EasyPHP-Devserver-17\eds-www\\';
$files= $_POST['n'].'.txt';
$file_admin=$_POST['n'].'admin'.'.txt';
$_SESSION['name_user']=$_POST['n'];

// Concatenate the directory and filename to create the full path
$filename= $directory . $files;
$admin=$directory .  $file_admin;
$_SESSION['file']=$filename;
$file=fopen($filename,'a');
$file2=fopen($admin,'a');
if (isset($_POST['done']) && $er_s == 0) {
    

    $name_p = $_POST['search_product'];
    $number = $_POST['number_product'];
    $check_product = "SELECT * FROM product WHERE name_product='$name_p'";
    $result = mysqli_query($conn, $check_product);

    $data3 = mysqli_fetch_assoc($result);
    $row = mysqli_num_rows($result);
    $res = $number * $data3['sale_product'];
    

    if ($row == 1) {
        
        if($_POST['number_product']<= $data3['quantity']){

        if (file_exists($filename) && file_exists($admin)) {
                
            
        
           // file_put_contents($admin, $data3['name_product'] . "  " . " number: " . $number . "  " . "for sale =" . $data3['sale_product'] . "  " . "all price =" .$res .PHP_EOL, FILE_APPEND);
            file_put_contents($filename, $data3['name_product'] . "  " . " number: " . $number . "  " . "for sale =" . $data3['sale_product'] . "  " . "all price =" .$res . PHP_EOL, FILE_APPEND);
            echo'<br>';
            $update_product= $data3['quantity']-$number;
            $check_quantity="UPDATE product SET quantity='$update_product' WHERE name_product='$name_p'";
            mysqli_query($conn,$check_quantity);
        }
                }else {
                    $err='not have enough contity';
                    $er_s=1;
                    

                    }
    }
}
if (isset($_POST['finish'])) {
    if (file_exists($filename)) {
        file_put_contents($filename, ' ' . PHP_EOL); 
    }
}
if (isset($_POST['ok'])) {
    $total = 0;

    // Read the contents of the file and calculate the total
    $fileContents = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($fileContents as $line) {
        $parts = explode("all price =", $line);
        if (isset($parts[1])) {
            $total += trim($parts[1]);
        }
    }

    // Append the total to the file
    
    file_put_contents($filename, "Overall Total: $total" . PHP_EOL, FILE_APPEND);
   // open($filename,'r');
    header('location:file_content.php');

  /*  $total_admin = 0;

    // Read the contents of the file and calculate the total
    $fileContents_admin = file($admin, FILE_IGNORE_NEW_LINES);
    foreach ($fileContents_admin as $line) {
        $parts_admin = explode("all price =", $line);
        if (isset($parts_admin[1])) {
            $total_admin += trim($parts_admin[1]);
        }
    }

    // Append the total to the file
    
    file_put_contents($admin, "Overall Total: $total_admin" . PHP_EOL, FILE_APPEND);*/
}


    

    include('search_product.php');
    









?>

