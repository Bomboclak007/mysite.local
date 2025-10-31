<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // им каталог
    $directory = trim($_POST['directory']);

    // проверка сущ каталога
    if (is_dir($directory)) {
        // откр каталг
        if ($handle = opendir($directory)) {
            echo "<h2>Содержимое каталога: $directory</h2>";
            echo "<ul>"; //списк ввод файл и каталогов

            // чит содерж каталог
            while (false !== ($file = readdir($handle))) {
                // пропуск спец знак
                if ($file != "." && $file != "..") {
                    // путь к файлу
                    $filePath = $directory . '/' . $file;

                    // опр файл и созд пиктограму
                    $icon = is_dir($filePath) ? '📁' : '📄';

                    // получ размр файл или пометк каталаг
                    $size = is_dir($filePath) ? 'Каталог' : filesize($file) . ' байт';

                    // получ дат и врем посл мод файл
                    $lastModified = date("Y-m-d H:i:s", filemtime($filePath));

                    // вывод инф о файл
                    echo "<li>$icon <strong>$file</strong> - $size, Последнее изменение: $lastModified</li>";
                }
            }
            echo "</ul>";
            closedir($handle);
        } else {
            echo "Не удалось открыть каталог.";
        }
    } else {
        echo "Указанный путь не является каталогом.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Просмотр содержимого каталога</title>
</head>
<body>
<h1>Введите имя каталога</h1>


<form method="post">
    <label>Каталог: <input type="text" name="directory" required></label>
    <input type="submit" value="Показать содержимое">
</form>
</body>
</html>
