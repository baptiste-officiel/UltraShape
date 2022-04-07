<?php
require_once './app/Views/admin/layouts/headerAdmin.php';
?>

<main id="contenu">
    <div class="container">
        <section id="pageConnexionAdmin">
            <h1>Connexion Administrateur</h1>
            <form action="indexAdmin.php?action=connexionAdmin" method="post">
                <input type="text" name="mail" id="mail" placeholder="Mail administrateur">
                <input type="text" name="password" id="password" placeholder="Mot de passe">
                <button type="submit">Connexion</button>
            </form>

            <a id="autre" href="indexAdmin.php?action=createAdminPage">Nouvel administrateur</a>

            
        </section>

        <a id="retour" href="index.php">Retour à l'accueil</a>
    </div>
</main>


<?php
require_once './app/Views/admin/layouts/footer.php';
?>