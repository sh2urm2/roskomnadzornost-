<?php

function formatTitle($text, $maxLength = 20) {
    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength) . "...";
    }
    return $text;
}

function getCurrentGreeting() {
    $hour = (int) date('H');

    if ($hour >= 6 && $hour <= 11) {
        return "Доброго ранку";
    } elseif ($hour >= 12 && $hour <= 17) {
        return "Добрий день";
    } elseif ($hour >= 18 && $hour <= 23) {
        return "Добрий вечір";
    } else {
        return "Доброї ночі";
    }
}

$taskTitle = "Підготувати звіт з лабораторної роботи №4 до кінця тижня";
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
</head>
<body>
    <header>
        <h1><?= getCurrentGreeting() ?>!</h1>
    </header>

    <main>
        <section>
            <h2>Поточне завдання</h2>
            <p><?= formatTitle($taskTitle) ?></p>
        </section>
    </main>
</body>
</html>