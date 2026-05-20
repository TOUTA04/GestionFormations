<?php
$pageTitle = 'Paiement confirmé';
require 'views/partials/header.php';
?>

<div class="container">
    <div class="succes-box">
        <div class="succes-icon">✅</div>
        <h1>Paiement confirmé !</h1>
        <p style="font-size:18px; color:var(--text); font-weight:600; margin:14px 0 6px;">
            Bienvenue, <?= htmlspecialchars($_SESSION['etudiant_prenom'] ?? '') ?> !
        </p>
        <p>
            Votre inscription à la formation<br>
            <strong style="color:var(--primary);">
                <?= htmlspecialchars($_SESSION['formation_titre'] ?? '') ?>
            </strong><br>
            a été validée avec succès.
        </p>

        <div style="background:var(--gray-bg); border-radius:8px; padding:16px; margin:24px 0; text-align:left;">
            <div style="font-size:13px; color:var(--muted); margin-bottom:4px;">Numéro d'inscription</div>
            <div style="font-size:20px; font-weight:700; color:var(--primary);">
                #<?= str_pad($_SESSION['inscription_id'] ?? 0, 6, '0', STR_PAD_LEFT) ?>
            </div>
        </div>

        <a href="index.php?page=cours"
           class="btn btn-success btn-block"
           style="font-size:15px; padding:14px; margin-bottom:12px;">
            🎓 Accéder à mes cours →
        </a>
        <a href="index.php?page=formations" class="btn btn-primary btn-block" style="padding:12px;">
            Voir d'autres formations
        </a>
    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
