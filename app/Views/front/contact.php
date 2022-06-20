<?php
require_once 'layouts/header.php';
?>

<div id="contenu-contact">
<section id="texte-contact">
<p class="container">Tu veux prendre contact avec nous pour fabriquer ta board custom ? Toutes les planches sont faites à la main et sont des modèles uniques !</p>
    <p class="container">Tu as d'autres questions ? </p>
    <p class="container">Tu trouveras ici nos coordonnées ! Tu peux également nous contacter via le formulaire et nous reviendrons vers toi dans les plus brefs délais !</p>
    
</section>
<div id="contact" class="container">



        <form action="index.php?action=contactPost" method="post" id="contact-form" class="input-form">

            <div class="anim-input">
            <label for="lastname">Nom*</label>
            <input type="text" name="lastname" id="lastname">
            </div>

            <div class="anim-input">
            <label for="firstname">Prénom*</label>
            <input type="text" name="firstname" id="firstname">
            </div>

            <div class="anim-input">
            <label for="email">Email*</label>
            <input type="email" name="email" id="email">
            </div>

            <div class="anim-input">
            <label for="object">Objet de la demande</label>
            <input type="text" name="object" id="object">
            </div>

            <div class="anim-input">
            <label for="content">Message*</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>

            <div id="validate-form">
            <input type="checkbox" name="validate" id="validate">
            <label for="validate" id="validate-label">En cochant cette case, vous acceptez l'utilisation de vos données.</label>
            </div>

            <button type="submit">Envoyer</button>
        </form>

    <div id="coordonnes-contact">
    <h2>Ultra Shape</h2>
        <a href="tel:+33238325260" id="telephone">02 38 32 52 60</a>
        <address>
        56000 VANNES
        </address>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.8786321747134!2d-2.777220584068797!3d47.64792527918736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1ee660f85f%3A0x37b8927e9d6ad86b!2sGRETA%20de%20Bretagne%20Sud%20-%20Agence%20de%20Vannes!5e0!3m2!1sfr!2sfr!4v1650541297465!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </div>   
    </div>
</div>

<?php
require_once 'layouts/footer.php';
?>