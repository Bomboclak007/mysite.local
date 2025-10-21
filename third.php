<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лабораторная работа №3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="calculator">
    <h1>Двухзначные простые числа</h1>

    <?php

    function isPrime($number) {
        if ($number < 2) return false;
        if ($number == 2) return true;
        if ($number % 2 == 0) return false;

        for ($i = 3; $i <= sqrt($number); $i += 2) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }


    $primeNumbers = [];
    for ($i = 10; $i <= 99; $i++) {
        if (isPrime($i)) {
            $primeNumbers[] = $i;
        }
    }
    ?>

    <div class="result">
        <h3>Найдено <?php echo count($primeNumbers); ?> двухзначных простых чисел:</h3>
        <div class="formula">
            <?php

            echo implode(', ', $primeNumbers);
            ?>
        </div>

        <h3>Функция для проверки простого числа:</h3>
        <div class="formula">
            function isPrime($number) {<br>
            &nbsp;&nbsp;if ($number < 2) return false;<br>
            &nbsp;&nbsp;if ($number == 2) return true;<br>
            &nbsp;&nbsp;if ($number % 2 == 0) return false;<br>
            &nbsp;&nbsp;for ($i = 3; $i <= sqrt($number); $i += 2) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;if ($number % $i == 0) return false;<br>
            &nbsp;&nbsp;}<br>
            &nbsp;&nbsp;return true;<br>
            }
        </div>
    </div>
</div>
</body>
</html>