<?php

class Exam {

    private $discipline;
    private $numberOfStudents;
    private $duration;

    // констр клас инцлз свойств
    public function __construct($discipline, $numberOfStudents, $duration) {
        $this->discipline = $discipline;
        $this->numberOfStudents = $numberOfStudents;
        $this->duration = $duration; // устн продл экз
    }

    // раст качств
    public function calculateQuality() {
        return $this->numberOfStudents / $this->duration; // отнш студ к врм
    }

    // раст 2 ек
    public function calculateFailPercentage($failCount) {
        return ($failCount / $this->numberOfStudents) * 100; // двойки
    }

    // поля кчств
    public function calculateQualityField($failCount) {
        $Q = $this->calculateQuality(); //качств
        $P = $this->calculateFailPercentage($failCount); // проц 2
        return $Q * (100 - $P) / 100; // Возвращаем поле качества с учетом двоек
    }
}

$result = null;

// Провр пост зпр
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // даные форм
    $discipline = $_POST['discipline'];
    $numberOfStudents = (int)$_POST['number_of_students']; // кол студ в целку
    $duration = (float)$_POST['duration']; // продл экз преоб чсл плав запятая
    $failCount = (int)$_POST['fail_count']; // кол двоек целка

    // созд нов обкт ехам
    $exam = new Exam($discipline, $numberOfStudents, $duration);

    // сохр результ масив
    $result = [
            'Q' => $exam->calculateQuality(), // Q
            'P' => $exam->calculateFailPercentage($failCount), // P
            'R' => $exam->calculateQualityField($failCount) //  R
    ];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Расчет качества экзамена</title>
</head>
<body>
<h1>Расчет качества экзамена</h1>


<form method="post">
    <label>Дисциплина: <input type="text" name="discipline" required></label><br>
    <label>Число студентов: <input type="number" name="number_of_students" required></label><br>
    <label>Продолжительность экзамена (часы): <input type="number" step="0.1" name="duration" required></label><br>
    <label>Количество двоек: <input type="number" name="fail_count" required></label><br>
    <input type="submit" value="Рассчитать">
</form>

<?php if ($result): ?>
    <h2>Результаты:</h2>
    <p>Дисциплина: <?= htmlspecialchars($discipline) ?></p>
    <p>Качество (Q): <?= htmlspecialchars($result['Q']) ?></p>
    <p>Процент двоек (P): <?= htmlspecialchars($result['P']) ?>%</p>
    <p>Поле качества (R): <?= htmlspecialchars($result['R']) ?></p>
<?php endif; ?>
</body>
</html>
