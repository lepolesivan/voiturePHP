<?php 
    include_once(__DIR__ . '/partials/head.php');
    require_once(__DIR__ . "/data.php");
    require_once(__DIR__ . "/fonction.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $car = checkId($cars, $id);

        if ($car !== null) {
            ?>
                <h1><?= $car['name'] ?></h1>
                <p>Prix : <?= $car['price'] ?>€</p>
                <img src="/public/img/<?= $car['picture']?>" alt="image d'une <?= $car['picture']?>">
        <?php
        
        } else {
            echo "<p>Voiture non trouvée</p>";
        }

    } else {
        header('Location: /404.php');
        exit;
    }

include_once(__DIR__ . '/partials/footer.php');