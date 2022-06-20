<?php require_once './app/Views/admin/layouts/headerAdmin.php'; ?>

<div id="contenuDashboard">
    <!-- <div class="container"> -->
    <div id="liens-compte">
        <a href="indexAdmin.php?action=deconnexion">Déconnexion</a>
    </div>
    <nav id="menuModifAdmin">
        <h1>Nouveau nom</h1>
        <form method="post" action="indexAdmin.php?action=editPseudo&id=<?= $_SESSION['id']; ?>">
        <input type="text" name="firstname" id="firstname" value="<?= $_SESSION['firstname']; ?>">
        <button type="submit">Valider</button>

    
    </nav>
    <a class="bouton-noir" id="returnFromCompte" href="indexAdmin.php?action=dashboard">Retour</a>


    <!-- </div> -->
</div>




<?php
require_once './app/Views/admin/layouts/footer.php';
?>