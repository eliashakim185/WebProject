<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
    background-color: #ffffff; /* Initial background color */
    font-family: Arial, sans-serif;
}

#color-picker {
    margin-bottom: 20px;
}

#content {
    padding: 20px;
}
</style>
<script>
function changeBackgroundColor() {
    var color = document.getElementById('color').value;
    document.body.style.backgroundColor = color;
}
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Changing Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="color-picker">
        <label for="color">Choose background color:</label>
        <input type="color" id="color" name="color" value="#ffffff" onchange="changeBackgroundColor()">
    </div>
    <div id="content">
        <h1><?php echo "Your Website Content Goes Here"; ?></h1>
    </div>
    <script src="script.js"></script>
	<?php
$dynamicContent = "Your dynamic content goes here";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Same as before -->
</head>
<body>
    <!-- Same as before, with dynamic content -->
    <div id="content">
        <h1><?php echo $dynamicContent; ?></h1>
    </div>
    <script src="script.js"></script>
</body>
</html>

</body>
</html>
