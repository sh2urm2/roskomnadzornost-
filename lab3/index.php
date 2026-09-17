<?php
$taskName = "Верстка головної сторінки";
$isCompleted = true;

$taskName2 = "Підключення API";
$isCompleted2 = false;
?>
<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="UTF-8">
<title>Лабораторна робота №3</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        padding: 30px;
    }
    ul {
        list-style: none;
        padding: 0;
        max-width: 400px;
    }
    li {
        padding: 12px 16px;
        margin-bottom: 8px;
        border-radius: 6px;
        background: #fff;
        box-shadow: 0 1px 3px rgba(0,0,0,0.15);
    }
    .task-done {
        color: green;
        text-decoration: line-through;
    }
    .task-pending {
        color: gray;
    }
</style>
</head>
<body>

<h1>Список завдань</h1>

<ul>
    <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">
        <?= $taskName ?> —
        <?php if ($isCompleted == true): ?>
            ✔️ Виконано
        <?php else: ?>
            🕒 В процесі
        <?php endif; ?>
    </li>

    <li class="<?= $isCompleted2 ? 'task-done' : 'task-pending' ?>">
        <?= $taskName2 ?> —
        <?php if ($isCompleted2 == true): ?>
            ✔️ Виконано
        <?php else: ?>
            🕒 В процесі
        <?php endif; ?>
    </li>
</ul>

</body>
</html>