<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расчет электрической цепи</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
    <h1>Расчет электрической цепи</h1>
    </head>
    <body>
    <div class="calculator">
        <h1>Расчет электрической цепи</h1>

        <?php
        // Фиксированное значение E
        $E = 285;

        // Инициализация переменных
        $R = $r = $T = 0;
        $error = "";

        // Обработка данных формы
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Получение и проверка данных
            if (!empty($_POST["R"]) && !empty($_POST["r"])) {
                $R = floatval($_POST["R"]);
                $r = floatval($_POST["r"]);

                // Проверка на ноль в знаменателе
                if (($R + $r) != 0) {
                    // Расчет по формуле T = (E * R) / (R + r)
                    $T = ($E * $R) / ($R + $r);
                } else {
                    $error = "Ошибка: сумма сопротивлений R + r не может быть равна нулю!";
                }
            } else {
                $error = "Пожалуйста, заполните все поля!";
            }
        }
        ?>

        <form method="post" action="">
            <div class="form-group">
                <label>Напряжение E (фиксированное):</label>
                <div class="fixed-value">
                    E = <?php echo $E; ?> В
                </div>
            </div>

            <div class="form-group">
                <label for="R">Сопротивление R (Ом):</label>
                <input type="number" id="R" name="R" step="0.01" min="0.01" value="<?php echo isset($_POST['R']) ? htmlspecialchars($_POST['R']) : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="r">Сопротивление r (Ом):</label>
                <input type="number" id="r" name="r" step="0.01" min="0.01" value="<?php echo isset($_POST['r']) ? htmlspecialchars($_POST['r']) : ''; ?>" required>
            </div>

            <button type="submit">Рассчитать</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)): ?>
            <div class="result">
                <h2>Результаты расчета:</h2>
                <p><strong>Введенные значения:</strong></p>
                <ul>
                    <li>Напряжение E = <?php echo $E; ?> В (фиксированное)</li>
                    <li>Сопротивление R = <?php echo $R; ?> Ом</li>
                    <li>Сопротивление r = <?php echo $r; ?> Ом</li>
                </ul>

                <p><strong>Формула расчета:</strong></p>
                <div class="formula">T = (E × R) / (R + r)</div>

                <p><strong>Вычисление:</strong></p>
                <div class="formula">
                    T = (<?php echo $E; ?> × <?php echo $R; ?>) / (<?php echo $R; ?> + <?php echo $r; ?>)<br>
                    T = <?php echo $E * $R; ?> / <?php echo $R + $r; ?><br>
                    T = <?php echo round($T, 4); ?>
                </div>

                <p style="margin-top: 15px; font-size: 18px;">
                    <strong>Итоговое значение: T = <?php echo round($T, 4); ?></strong>
                </p>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="error">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <div style="margin-top: 20px; font-size: 14px; color: #666;">
            <p><strong>Примечание:</strong> В формуле T = (E × R) / (R + r), где E = 285 В (фиксированное значение)</p>
        </div>
    </div>
    </body>
</html>