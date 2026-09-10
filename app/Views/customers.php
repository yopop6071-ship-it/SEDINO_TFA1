<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
    <nav>
    <a href="<?= site_url('/') ?>">Landing</a>
    <a href="<?= site_url('about') ?>">About</a>
    <a href="<?= site_url('users') ?>">Users</a>
</nav>

    <h1>Customers</h1>

    <ul>
        <?php foreach ($customers as $customer): ?>
            <li><?= esc($customer['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>