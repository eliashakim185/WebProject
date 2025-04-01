
<?php include('sql-project.php')?>
<html>
<head>
    <title>Product Search</title>
    <script>
        function updateTextInput() {
            var selectElement = document.getElementById("productSelect");
            var inputElement = document.getElementById("productName");

            // Set the value of the input text field to the selected option
            inputElement.value = selectElement.options[selectElement.selectedIndex].text;
        }
    </script>
</head>
<body>

<form action="search_product_db.php" method="post">
    <input type="hidden" name="n" value="all">

    <?php
    
    
    if(isset($err)){
        echo $err;
    }

    ?>

    <h4>Name product:</h4><br>
    
    

    <?php

include('sql-project.php');
$query="SELECT name_product FROM product";
$result=mysqli_query($conn,$query);?>
<select name="search_product">
    <option value="NULL">choose product</option>

<?php
foreach($result as $pro)
{ ?> <option value="<?=$pro['name_product']?>"><?= $pro['name_product']?></option>







<?php
};


?>
</select>


    <h4>Quantity:</h4>
    <input type="number" name="number_product" >

    <input type="submit" name="done" value="Entered">
    <input type="submit" name="ok" value="OK">
</form>

</body>
</html>
