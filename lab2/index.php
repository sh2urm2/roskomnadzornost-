<?php
$appName = "Task Manager";
$taskTitle = "Вивчити основи PHP";
$taskTimeEstimate = 3;
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?= $appName ?></title>
</head>
<body>
    <header>
        <h1><?= $appName ?></h1>
    </header>
    <main>
        <ul>
            <li>Завдання: <?= $taskTitle ?></li>
            <li>Оцінка часу: <?= $taskTimeEstimate ?> год.</li>
        </ul>
    </main>
</body>
</html>