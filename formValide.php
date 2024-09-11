<?php
    include_once(__DIR__ . '/partials/head.php');

    if(!isset($_POST['mail']) OR !isset($_POST['name']) OR !isset($_POST['message']) OR
        empty($_POST['mail']) OR empty($_POST['name']) OR empty($_POST['message'])
        ){
            echo "<p>Merci de remplire tous les champs du formulaire !</p>";
        }elseif(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
            echo "<p>Merci de donner un email valide !</p>";
        }else {
            $mail = $_POST['mail'];
            $name = $_POST['name'];
            $message = $_POST['message'];
?>
    <div class="text-center">
        <h1>Votre message à bien été envoyer</h1>
        <p>Merci, <?=$name?>.</p>
        <h2>Pour récap :</h2>
        <p>Votre message</p>
        <p><?= $message ?></p>
        <p>Votre email</p>
        <p><?= $mail ?></p>
    </div>
<?php
        }
?>


<?php
    include_once(__DIR__ . '/partials/footer.php');