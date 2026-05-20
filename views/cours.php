<?php
$pageTitle = 'Mes cours';
require 'views/partials/header.php';
?>

<div class="container">
    <div class="cours-page">
        <div class="cours-header">
            <h1>🎓 <?= htmlspecialchars($formation_titre) ?></h1>
            <p>Bienvenue, <?= htmlspecialchars($etudiant_prenom) ?> ! Votre accès est activé.</p>
        </div>

        <div class="section-title" style="margin-bottom:20px;">Chapitres du cours</div>

        <div class="chapitres-grid">
            <?php foreach ($chapitres as $chap): ?>
            <div class="chapitre-card">
                <div class="chap-num"><?= $chap['num'] ?></div>
                <h3><?= htmlspecialchars($chap['titre']) ?></h3>
                <p><?= htmlspecialchars($chap['desc']) ?></p>
                <span class="chap-tag"><?= htmlspecialchars($chap['duree']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>

        <div style="margin-top:32px; display:flex; gap:12px; flex-wrap:wrap;">
            <a href="index.php" class="btn btn-primary">← Retour à l'accueil</a>
            <a href="index.php?page=formations" class="btn btn-accent">Voir d'autres formations</a>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
