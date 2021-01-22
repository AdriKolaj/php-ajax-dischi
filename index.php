<?php 
    include __DIR__ . '/partials/db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi - php & ajax</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include __DIR__ . '/partials/header.php' ?>
    
    <main>
        <div class="container">
            <?php foreach ($albums as $album) { ?>
                <div class="album-container">
                    <div class="img-container">
                        <img src="<?= $album['poster'] ?>" alt="poster">
                    </div>
                    <div class="text-container">
                        <h3><?= $album['title'] ?></h3>
                        <h4><?= $album['author'] ?></h4>
                        <div class="year"><?= $album['year'] ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

    <?php include __DIR__ . '/partials/footer.php' ?>
</body>
</html>