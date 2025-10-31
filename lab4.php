
<?php
// Функция для замены слов на '*'
function replaceWordsWithAsterisks($text, $wordsToReplace) {
    $wordsArray = explode(',', $wordsToReplace);

    foreach ($wordsArray as $word) {
        $word = trim($word);
        if (!empty($word)) {
            $text = str_replace($word, str_repeat('*', strlen($word)), $text);
        }
    }

    return $text;
}

$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $text = $_POST['text'] ?? '';
    $wordsToReplace = $_POST['words'] ?? '';

    // Вызываем функцию замены
    $result = replaceWordsWithAsterisks($text, $wordsToReplace);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Замена слов</title>
</head>
<body>
<h1>Замена слов на символы *</h1>
<form method="post" action="">
    <label for="text">Введите текст:</label><br>
    <textarea id="text" name="text" rows="4" cols="50"><?php echo htmlspecialchars($text ?? ''); ?></textarea><br><br>

    <label for="words">Введите слова для замены (через запятую):</label><br>
    <input type="text" id="words" name="words" value="<?php echo htmlspecialchars($wordsToReplace ?? ''); ?>"><br><br>

    <input type="submit" value="Заменить">
</form>

<?php if ($result): ?>
    <h2>Результат:</h2>
    <p>Исходный текст: <?php echo htmlspecialchars($text); ?></p>
    <p>Текст после замены: <?php echo htmlspecialchars($result); ?></p>
<?php endif; ?>
</body>
</html>
