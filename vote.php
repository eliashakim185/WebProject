<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="results.php" method="POST" name="f"  >
            <h1>Vote</h1>
			
            <table>
                <tr>
                    <th>Hala</th>
                    <th>
                        <input type="radio" name="vote" value="h" />
                    </th>
                </tr>

                <tr>
                    <th>Chaza</th>
                    <th>
                        <input type="radio" name="vote" value="c" />
                    </th>
                </tr>

                <tr>
                    <th>Ali</th>
                    <th>
                        <input type="radio" name="vote" value="a" />
                    </th>
                </tr>

                <tr>
                    <th><input type="submit" name="submit" value="Result" /></th>
                    <th><input type="submit" name="submit" value="Vote" /></th>
                </tr>
            </table>

        </form>
    </center>
	<?php
if ($_POST["submit"] == "Vote") {
    $vote = $_POST["vote"];
    $fp = fopen("results.txt", "a+");
    fputs($fp, $vote);
    fclose($fp);
    header("Location: vote.php");
} else {
    $fp = fopen("results.txt", "r");
    $file_string = fgets($fp, 99999);
    $results = str_split($file_string);

    $total = 0;
    $votes = array(
        "Hala" => 0,
        "Chaza" => 0,
        "Ali" => 0,
    );

    foreach ($results as $i) {
        if ($i == 'h') {
            $votes["Hala"]++;
        } else if ($i == 'c') {
            $votes["Chaza"]++;
        } else if ($i == 'a') {
            $votes["Ali"]++;
        }
        $total++;
    }

    $persentages = array(0, 0, 0);
    $persentages[0] = (int)(($votes["Hala"] / $total) * 100);
    $persentages[1] = (int)(($votes["Chaza"] / $total) * 100);
    $persentages[2] = (int)(($votes["Ali"] / $total) * 100);


    echo '<center><table width="70%">';
    $i = 0;
    foreach ($votes as $key => $val) {
        echo "<tr><th>$key</th><th>$val</th>";
        echo '<th width="80%"><table border="2px" style="border-collapse:collapse;" width="90%"><tr><th width="' . $persentages[$i] . '%" bgcolor="blue" style="color:blue; height:10px;"></th><th></th></tr></table></th></tr>';
        $i++;
    }
    echo "</table>";

    echo '<progress value="' . $persentages[0] . '" max="100">' . $persentages[0] . '%</progress> <br>';
    echo '<progress value="' . $persentages[1] . '" max="100">' . $persentages[1] . '%</progress> <br>';
    echo '<progress value="' . $persentages[2] . '" max="100">' . $persentages[2] . '%</progress> <br>';


    echo "<a href='vote.php'>Vote</a>";
    
}
?>


</html>
