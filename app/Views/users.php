<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <nav>
    <a href="<?= site_url('/') ?>">Landing</a>
    <a href="<?= site_url('about') ?>">About</a>
    <a href="<?= site_url('customers') ?>">Customers</a>
</nav>

    <h1>Users</h1>

    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= esc($user['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>