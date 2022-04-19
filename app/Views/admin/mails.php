<?php require_once './app/Views/admin/layouts/headerAdmin.php'; ?>

<div id="contenuDashboard">
    
<table>
<thead>
    <tr>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Mail</td>
        <td>Objet</td>
        <td>Message</td>
    </tr>
</thead>

<tbody>
    <?php foreach ($allMails as $allMail){ ?>
    <tr>
        <td><?= htmlspecialchars($allMail['lastname']); ?></td>
        <td><?= htmlspecialchars($allMail['firstname']); ?></td>
        <td><?= htmlspecialchars($allMail['email']); ?></td>
        <td><?= htmlspecialchars($allMail['object']); ?></td>
        <td><?= htmlspecialchars($allMail['content']); ?></td>
    </tr>
    
    <?php } ?>
</tbody>
</table>

</div>




<?php require_once './app/Views/admin/layouts/footer.php'; ?>