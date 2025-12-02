<?php

class Triangle {

    private $cathetus1;
    private $cathetus2; // втр ктр

    public function __construct($cathetus1, $cathetus2) {     // инлц констр
        $this->cathetus1 = $cathetus1; // инцлз 1кт
        $this->cathetus2 = $cathetus2;
    }

    public function calculateArea() {
        return 0.5 * $this->cathetus1 * $this->cathetus2; // площ
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // пров отпр форм

    $cathetus1 = floatval($_POST['cathetus1']); // преоб в веществ числ
    $cathetus2 = floatval($_POST['cathetus2']);

    $triangle = new Triangle($cathetus1, $cathetus2);

    $area = $triangle->calculateArea();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вычисление площади прямоугольного треугольника</title>
</head>
<body>
<h1>Введите катеты прямоугольного треугольника</h1>
<form method="post">
    <label for="cathetus1">Первый катет:</label>
    <input type="text" id="cathetus1" name="cathetus1" required>
    <br>
    <label for="cathetus2">Второй катет:</label>
    <input type="text" id="cathetus2" name="cathetus2" required>
    <br>
    <input type="submit" value="Вычислить площадь">
</form>

<?php if (isset($area)): ?>
    <h2>Площадь прямоугольного треугольника: <?php echo $area; ?></h2>
<?php endif; ?>
</body>
</html>
