<?php
require_once './layouts/header.php';
?>

<div id="contenu">
    <div id="contact" class="container">
        <form action="index.php?action=contactPost" method="post" id="contact-form">

            <label for="name">Nom</label>
            <input type="text" name="name" id="name">

            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="phone">Téléphone</label>
            <input type="text" name="phone" id="phone">

            <label for="object">Objet de la demande</label>
            <input type="text" name="object" id="object">

            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</div>

<?php
require_once './layouts/footer.php';
?>