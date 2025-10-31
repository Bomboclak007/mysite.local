<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Двухзначные простые числа</title>
</head>
<body>
<h1>Двухзначные простые числа</h1>
<p>
    <?php
    // Функция для проверки, является ли число простым
    function isPrime($number) {
        if ($number <= 1) {
            return false; // Числа <= 1 не являются простыми
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; // Если делится на i, то не простое
            }
        }
        return true; // Если не нашлось делителей, то простое
    }

    // Массив для хранения двухзначных простых чисел
    $twoDigitPrimes = [];

    // Находим все двухзначные простые числа
    for ($i = 10; $i < 100; $i++) {
        if (isPrime($i)) {
            $twoDigitPrimes[] = $i; // Добавляем простое число в массив
        }
    }

    // Выводим найденные двухзначные простые числа
    echo "Двухзначные простые числа: " . implode(", ", $twoDigitPrimes);
    ?>
</p>
</body>
</html>
<?php
