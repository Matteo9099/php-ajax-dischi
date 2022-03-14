<?php
require __DIR__ . '/db/discs.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Php-Ajax dischi</title>
</head>
<body>

    <header class="d-flex align-items-center justify-content-start">
        <img src="img/logo-spotify-removebg-preview.png" alt="logo spotify">
    </header>

    <main>
        <section class="container" id="albums">
            <!-- snippet fine comando end per scrivere in HTML https://stackoverflow.com/questions/4600419/endforeach-in-loops  -->
            <?php foreach($database as $db) : ?>
                <div class="album-card-container text-center">
                    <div class="album-card pb-4">
                        <img src="<?= $db['poster'] ?>" alt="<?= $db['title'] ?>" class="img-fluid">
                        <h5><?= $db['title'] ?></h5>
                        <!-- Author & year -->
                        <div class="d-flex flex-column">
                            <span><?= $db['author'] ?></span>
                            <span><?= $db['year'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>


</body>
</html>