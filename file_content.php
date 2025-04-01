<html>
    <?php
session_start();
include('sql-project.php');
//$file = 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\CART.txt';
$filename = $_SESSION['file'];

$name = $_SESSION['name_user'];

// Display the table
if (file_exists($filename)) {
    echo "<h3>Invoice Details</h3>";
    echo '<h3>' . $name . '</h3>';
    echo "<table border='1'>";
    echo "<tr><th>Product Name</th><th>Quantity</th><th>Price</th><th>Total</th></tr>";

    $fileContents = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($fileContents as $line) {
        $parts = explode("  ", $line);
        echo "<tr>";
        foreach ($parts as $part) {
            echo "<td>" . $part . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>


    <form action="" method="post">
        <h4>finish:</h4>
        <input type="submit" name="finish" value="finish">
        </form>


<?php
// $_POST['n'] = $_SESSION['name_user']; // Unused variable

$directory = 'D:\easy php\EasyPHP-Devserver-17\eds-www\\';
$file_admin = $_SESSION['name_user'] . 'admin' . '.txt'; // Use session variable directly
$admin = $directory . $file_admin;

// Use appropriate file handling operations
if (isset($_POST['finish'])) {
    if (file_exists($admin)) {
        file_put_contents($admin, file_get_contents($filename), FILE_APPEND | LOCK_EX);
    }

    if (file_exists($filename)) {
        file_put_contents($filename, ' ' . PHP_EOL);
        //header('location:')
    }
}
?>
</html>
 
