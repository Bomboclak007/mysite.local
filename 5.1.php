<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вычисление площади прямоугольного треугольника</title>
</head>
<body>
<h1>Вычисление площади прямоугольного треугольника</h1>


<form method="post">
    <label for="catet1">Длина первого катета:</label><br>
    <input type="number" step="0.01" name="catet1" id="catet1" required><br><br>
    <label for="catet2">Длина второго катета:</label><br>
    <input type="number" step="0.01" name="catet2" id="catet2" required><br><br>
    <input type="submit" value="Вычислить площадь">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //отпр форм
    $catet1 = (float)$_POST['catet1']; // перемен с плав точкой
    $catet2 = (float)$_POST['catet2'];

    $area = ($catet1 * $catet2) / 2;
    echo "<h2>Площадь прямоугольного треугольника: " . $area . "</h2>";
}
?>
</body>
</html>
