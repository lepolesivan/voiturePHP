<?php include_once(__DIR__ . '/partials/head.php');
?>
    <form action="" method="POST">
        <label for="mail">
            Email
            <input type="email" name="mail">
        </label>
        <label for="pseudo">
            Prenom
            <input type="text" name="pseudo">
        </label>
        <label for="message">
            Message
            <input type="text" name="message">
        </label>
        <button type="submit">Envoie</button>
    </form>
    
<?php include_once(__DIR__ . '/partials/footer.php');