<?php require_once './app/Views/admin/layouts/headerAdmin.php'; ?>

<div id="contenuDashboard">
    <!-- <div class="container"> -->
    <div id="liens-compte">
        <a href="indexAdmin.php?action=deconnexion">Déconnexion</a>
    </div>
    <nav id="menuModifAdmin">
        <h1>Coucou <?= $_SESSION['firstname'] ?></h1>
        <p>Ton adresse mail : <?= $_SESSION['mail']; ?></p>
        <a href="indexAdmin.php?action=editCompte&id=<?= $_SESSION['id']; ?>">Modifier mon compte</a>

    
    </nav>
    <a class="bouton-noir" id="returnFromCompte" href="indexAdmin.php?action=dashboard">Retour</a>


    <!-- </div> -->
</div>




<?php
require_once './app/Views/admin/layouts/footer.php';
?>