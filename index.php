<?php include_once(__DIR__ . '/partials/head.php');
    include_once(__DIR__ . '/formulaire.php');
    require 'data.php';
    var_dump($cars);

    if($cars){
        foreach($cars as $element){
            $nameCar = $element['name'];
            echo '<p>' . $nameCar . '</p>';
        }
            

        foreach($cars as $element){
            ?>
            <div class="card" style="width: 18rem;">
            <img src="public/img/<?= $element['picture']?>" class="card-img-top" alt="image de voiture <?= $element['name']?>">
            <div class="card-body">
                <h5 class="card-title"><?= $element['name']?></h5>
                <p class="card-text">prix : <?= $element['price']?></p>
                <a href="cars.php?id=<?= $element['id']?>" class="btn btn-primary">Voir plus</a>
            </div>
            </div>
            
            <?php
        }

    }else{
        echo "<h1>Il n'ya pas de voitures</h1>";
    }


include_once(__DIR__ . '/partials/footer.php');