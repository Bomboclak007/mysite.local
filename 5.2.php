<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вычисление объёма призмы</title>
</head>
<body>
<h1>Вычисление объёма призмы с основанием в виде прямоугольного треугольника</h1>

<form method="post" action="">
    <label for="a">Длина первого катета (a):</label>
    <input type="number" step="0.01" name="a" id="a" required><br><br>
    <label for="b">Длина второго катета (b):</label>
    <input type="number" step="0.01" name="b" id="b" required><br><br>
    <label for="height">Высота призмы:</label>
    <input type="number" step="0.01" name="height" id="height" required><br><br>

    <input type="submit" value="Вычислить объём">
</form>

<?php

class RightTriangle {
    protected $a; 
    protected $b; // вт катет
    public function __construct(float $a, float $b) { //конструк для инцл катет
        $this->a = $a;
        $this->b = $b;
    }
    public function baseArea(): float {    
        return ($this->a * $this->b) / 2.0; // площадь
    }
}
class Prism extends RightTriangle {          //клас-потомок призм с основ в виде прямоугл угол
    protected $height; 
    public function __construct(float $a, float $b, float $height) { // конст для инцлиаз катет выст
        parent::__construct($a, $b); // вызов конст род клс
        $this->height = $height; 
    }
    public function volume(): float { 
        return $this->baseArea() * $this->height; // формула
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {     // пров запрос методом post
    $a = (float)$_POST['a']; // получ знач первг кат из форм и преоб в чсл с плав запят
    $b = (float)$_POST['b'];
    $height = (float)$_POST['height']; // получ знач выст из форм и преоб в
    $prism = new Prism($a, $b, $height);
    echo "<h2>Объём призмы: " . $prism->volume() . "</h2>";
}
?>
</body>
</html>
