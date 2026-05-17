<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Nakamura Tour &amp; Travels</title>
    <?php include __DIR__ . '/includes/stylesheet.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main class="user-panel-page container">
    <div class="row g-4">
        <div class="col-lg-3">
            <?php include __DIR__ . '/includes/sidebar.php'; ?>
        </div>

        <div class="col-lg-9">
            <section class="page-content">
                <h1 class="page-title">Dashboard</h1>
                <p class="page-subtitle">Welcome to Nakamura User Panel.</p>
            </section>
        </div>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
