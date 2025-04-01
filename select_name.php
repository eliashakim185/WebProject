<html>
<?php

include('sql-project.php');
$query="SELECT name_product FROM product";
$result=mysqli_query($conn,$query);?>
<select>
    <option value="NULL">choose product</option>

<?php
foreach($result as $pro)
{ ?> <option><?= $pro['name_product']?></option>







<?php
};

?>
</select>
</html>