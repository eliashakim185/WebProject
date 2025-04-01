 <?php

include 'sql-project.php';
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $query="select * from addaccount where username='$u' and password='$p'";
    $result=mysqli_query($conn,$query);
    $nbrows = mysqli_num_rows($result);
    if($nbrows==0){
        header('Location:login_project.php');
    }
 else if ($nbrows == 1) {
        header('Location:wel.php');

        }
?>
