<?php require PHP_ROOT.'/views/partials/header.php'; ?>

<h1 class="title">Valider un retour</h1>

<?php if (empty($emprunts)) { ?>
    <p class="subtitle">Aucun emprunt est en attente de retour.</p>
<?php } else { ?>

    <table>
        <thead>
            <tr>
                <th>Date de sortie</th>
                <th>Abonné</th>
                <th>Titre du livre</th>
                <th>Retard</th> <!-- Nouvelle colonne -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprunts as $emprunt) { 
                $dateSortie = new DateTime($emprunt['date_sortie']);
                $dateRetourPrevue = clone $dateSortie;
                $dateRetourPrevue->modify('+1 month'); // ou la durée réelle de prêt
                $en_retard = new DateTime() > $dateRetourPrevue;
            ?>
                <tr>
                    <td><?= $dateSortie->format('Y/m/d') ?></td>
                    <td><?= htmlspecialchars($emprunt['nom'].' '.$emprunt['prenom']) ?></td>
                    <td><?= htmlspecialchars($emprunt['titre']) ?></td>
                    <td>
                        <?php if ($en_retard): ?>
                            <span class="error">Retard</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="?page=validate-retour-emprunts&id=<?= $emprunt['id_emprunt'] ?>">Valider ce retour</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>

<?php require PHP_ROOT.'/views/partials/footer.php'; ?>
