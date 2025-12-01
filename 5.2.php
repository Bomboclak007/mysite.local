<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Объем призмы</title>
</head>
<body>
<h1>Вычисление объема призмы</h1>
<form method="post">
    <label for="base1">Длина первого катета (основания) прямоугольного треугольника:</label><br>
    <input type="number" name="base1" id="base1" required><br><br>
    <label for="base2">Длина второго катета (высоты) прямоугольного треугольника:</label><br>
    <input type="number" name="base2" id="base2" required><br><br>
    <label for="height">Высота призмы:</label><br>
    <input type="number" name="height" id="height" required><br><br>
    <input type="submit" value="Вычислить объем">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // проверк отпр форм
    $base1 = (float)$_POST['base1']; // перемен с плач точкой
    $base2 = (float)$_POST['base2'];
    $height = (float)$_POST['height'];
    class Prism {
        public $height;
        public function __construct($height) {         // констр для инцилз
            $this->height = $height; // устн выс
        }
        public function calculateVolume($base1, $base2) {       // вычсл объем
            $baseArea = ($base1 * $base2) / 2;
            $volume = $baseArea * $this->height;
            return $volume;
        }
    }

    $prism = new Prism($height);     // созд обкт клас призм
    $volume = $prism->calculateVolume($base1, $base2);   // объем призм
    echo "<h2>Объем призмы с прямоугольным треугольником в основании: " . $volume . "</h2>";
}
?>
</body>
</html>
