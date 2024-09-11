<?php include_once(__DIR__ . '/partials/head.php');
?>
    <form action="formValide.php" method="POST">
        <label for="mail">
            Email
            <input type="email" name="mail">
        </label>
        <label for="name">
            Prenom
            <input type="text" name="name">
        </label>
        <label for="message">
            Message
            <input type="text" name="message">
        </label>
        <button type="submit" class="btn btn-primary"> Envoyer</button>
    </form>

<?php
include_once(__DIR__ . '/partials/footer.php');