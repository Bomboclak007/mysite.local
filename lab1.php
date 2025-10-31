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
<h1>Задача №11</h1>
<?php
$x = 1.2;
$y = 2.0;

$step1 = pow($y, 7);

$step2 = 9.756 * $step1;

$step3 = tan($x);

$step4 = 2 * $step3;

$s = $step2 + $step4;

echo "Промежуточные результаты:\n";
echo "y⁷ = " . $step1 . "\n";
echo "9.756 × y⁷ = " . $step2 . "\n";
echo "tg(x) = " . $step3 . "\n";
echo "2 × tg(x) = " . $step4 . "\n";
echo "Итоговый результат: S = " . $s;
?>
</body>
</html>
