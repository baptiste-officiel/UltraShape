<?php
require_once 'layouts/header.php';
?>

<div id="contenu">
    <div class="container">
        <section id="creations-home">
            <h2>Créations</h2>
            <p>Découvre nos dernières réalisations et prends contact avec nous pour concevoir ta board custom !</p>
            <!-- img  -->
            <a href="index.php?action=creations">Voir tout</a>
        </section>

        <section id="reparations-home">
            <h2>Réparations</h2>
            <p>Ta board a pris un coup ? Une dérive s’est arrachée ? Consulte nos tarifs et contacte nous afin de la
                réparer et de vite la remettre à l’eau !</p>
            <a href="index.php?action=reparations">Voir tout</a>
        </section>

        <section id="about-home">
            <h2>A propos</h2>
            <p>L’histoire de l’atelier et du shaper, le palmarès..</p>
            <!-- img  -->
            <a href="index.php?action=about">Voir tout</a>
        </section>

        <section id="contact-home">
            <h2>Contact</h2>
            <p>Tu veux plus d’informations pour fabriquer ta board ou la réparer ? Contacte nous et nous traiterons ta
                demande avec grand plaisir !</p>
            <a href="index.php?action=contact">Nous contacter</a>
        </section>
    </div>
</div>

<?php
require_once 'layouts/footer.php';
?>