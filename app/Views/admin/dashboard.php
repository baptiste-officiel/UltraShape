<?php require_once './app/Views/admin/layouts/headerAdmin.php'; ?>

<div id="contenuDashboard">
    <nav id="menuAdmin">
    <h1>Coucou <?= $_SESSION['firstname'] ?></h1>

    <ul id="menuAd">
        <li><a href="indexAdmin.php?action=showMails">Mails <?php $mails = $nbMail->fetch(); ?>(<?= $mails[0]; ?>)</a></li>
        <li><a href="">Articles</a></li>
    </ul>
    </nav>

</div>




<?php
require_once './app/Views/admin/layouts/footer.php';
?>