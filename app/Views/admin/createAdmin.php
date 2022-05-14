<?php
require_once './app/Views/admin/layouts/headerAdmin.php';
?>

<main id="contenuAdmin">
    <div class="container">
        <section id="pageConnexionAdmin">
            <h1>Inscription Administrateur</h1>
            <form action="indexAdmin.php?action=createAdmin" method="post" id="createAdminForm">
                <input type="text" name="firstname" id="firstname" placeholder="Votre nom">
                <input type="text" name="mail" id="mail" placeholder="Votre mail">
                <input type="password" name="password" id="password" placeholder="Mot de passe">
                <button type="submit">Inscription</button>
            </form>

            <p id="autre">Vous avez déjà un compte ? <br><a href="indexAdmin.php?action=connexionAdminPage">Connectez-vous</a></p>


        </section>

        <a id="retour" href="index.php">Retour à l'accueil</a>
    </div>
</main>


<?php
require_once './app/Views/admin/layouts/footer.php';
?>