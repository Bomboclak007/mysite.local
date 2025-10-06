<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<table>
<?php
if(isset($_POST["n"])&&isset($_POST["m"])){
    $n=$_POST["n"];
    $m=$_POST["m"];
    for($i=1;$i<=$n;$i++){
        echo "<tr>";
        for($j=1;$j<=$m;$j++){

            echo "<td>".$i."</td>";
        }
    }
}
?>
</table>
</body>
</html>
