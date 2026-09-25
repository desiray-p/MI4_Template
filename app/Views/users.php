<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

<nav>
    <a href="<?= base_url('/') ?>">Home</a> |
    <a href="<?= base_url('about') ?>">About</a> |
    <a href="<?= base_url('customers') ?>">Customers</a> |
    <a href="<?= base_url('users') ?>">Users</a>
</nav>

    <h1>User Accounts</h1>

    <?php foreach ($users as $user): ?>

        <div>
            <h3><?= $user['full_name'] ?></h3>
            <p>Username: <?= $user['username'] ?></p>
            <p>Role: <?= $user['role'] ?></p>
        </div>

        <hr>

    <?php endforeach; ?>

</body>
</html>