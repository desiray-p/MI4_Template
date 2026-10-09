<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>

<nav>
    <a href="<?= base_url('/') ?>">Welcome</a> |
    <a href="<?= base_url('tasks') ?>">Task List</a> |
    <a href="<?= base_url('profile') ?>">Profile</a> |
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<h1>Task List</h1>

<?php foreach ($tasks as $task): ?>

    <div>
        <h3><?= $task['title'] ?></h3>
        <p>Status: <?= $task['status'] ?></p>
        <p>Date: <?= $task['task_date'] ?></p>
    </div>

    <hr>

<?php endforeach; ?>

</body>
</html>