<?php
require_once 'layouts/header.php';
?>

<main id="contenu-contact">
    <!-- Texte introduction page contact  -->
<section id="texte-contact">
<h2 class="container">Contact</h2>
    <p class="container">Tu veux prendre contact avec nous pour fabriquer ta board custom ? Toutes les planches sont faites à la main et sont des modèles uniques !</p>
    <p class="container">Tu as d'autres questions ? </p>
    <p class="container">Tu trouveras ici nos coordonnées ! Tu peux également nous contacter via le formulaire et nous reviendrons vers toi dans les plus brefs délais !</p>
    
</section>
<div id="contact" class="container">

<!-- Formulaire  -->

        <form action="index.php?action=contactPost" method="post" id="contact-form" class="input-form">

            <div class="anim-input">
            <label for="lastname">Nom</label>
            <input class="local" type="text" name="lastname" id="lastname" required>
            </div>

            <div class="anim-input">
            <label for="firstname">Prénom</label>
            <input class="local" type="text" name="firstname" id="firstname" required>
            </div>

            <div class="anim-input">
            <label for="email">Email</label>
            <input class="local"  type="email" name="email" id="email" required>
            </div>

            <div class="anim-input">
            <label for="object">Objet de la demande</label>
            <input type="text" name="object" id="object" required>
            </div>

            <div class="anim-input">
            <label for="content">Message</label>
            <textarea name="content" id="content" cols="30" rows="10" required></textarea>
            </div>

            <p class="champs-obligatoires">Tous les champs sont obligatoires !</p>

            <div id="validate-form">
            <input type="checkbox" name="validate" id="validate">
            <label for="validate" id="validate-label">En cochant cette case, vous acceptez l'utilisation de vos données.</label>
        </div>
        <p id="acceptation" class="champs-obligatoires">Vous devez accepter afin d'envoyer votre demande !</p>

            <button type="submit" id="envoiFormulaire">Envoyer</button>
        </form>

    <div id="coordonnes-contact">

    <!-- Coordonnées et map  -->

    <h2>Ultra Shape</h2>
        <a href="tel:+33238325260" id="telephone">02 38 32 52 60</a>
        <address>
        56000 VANNES
        </address>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.8786321747134!2d-2.777220584068797!3d47.64792527918736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1ee660f85f%3A0x37b8927e9d6ad86b!2sGRETA%20de%20Bretagne%20Sud%20-%20Agence%20de%20Vannes!5e0!3m2!1sfr!2sfr!4v1650541297465!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </div>   
    </div>
        </main>

<?php
require_once 'layouts/footer.php';
?>