<?php
require_once 'layouts/header.php';
?>

<div id="contenu">
    <div id="contact" class="container">
        <form action="index.php?action=contactPost" method="post" id="contact-form">

            <label for="lastname">Nom*</label>
            <input type="text" name="lastname" id="lastname">

            <label for="firstname">Prénom*</label>
            <input type="text" name="firstname" id="firstname">

            <label for="email">Email*</label>
            <input type="email" name="email" id="email">

            <label for="object">Objet de la demande</label>
            <input type="text" name="object" id="object">

            <label for="content">Message*</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>

            <div id="validate-form">
            <input type="checkbox" name="validate" id="validate">
            <label for="validate" id="validate-label">En cochant cette case, vous acceptez l'utilisation de vos données.</label>
            </div>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</div>

<?php
require_once 'layouts/footer.php';
?>