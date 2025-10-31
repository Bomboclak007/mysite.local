<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Замена элементов массива</title>
</head>
<body>
<h2>Введите 17 целых чисел через запятую</h2>
<form method="post">
    <input type="text" name="numbers" size="50" placeholder="Пример: 1,2,3,...,17" required>
    <input type="submit" value="Обработать массив">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем массив из формы и преобразуем в числа
    $input = $_POST['numbers'];
    $numbers = array_map('intval', explode(',', $input));

    if (count($numbers) != 17) {
        echo "<p style='color:red;'>Пожалуйста, введите ровно 17 чисел.</p>";
    } else {
        // 1. Вычисляем сумму нечетных элементов
        $sumOdd = 0;
        foreach ($numbers as $num) {
            if ($num % 2 != 0) {
                $sumOdd += $num;
            }
        }

        // 2. Заменяем элементы, кратные 3, на сумму нечетных
        foreach ($numbers as $key => $num) {
            if ($num % 3 == 0) {
                $numbers[$key] = $sumOdd;
            }
        }

        // 3. Вывод результата
        echo "<h3>Результирующий массив:</h3>";
        echo "<p>" . implode(', ', $numbers) . "</p>";
    }
}
?>
</body>
</html>