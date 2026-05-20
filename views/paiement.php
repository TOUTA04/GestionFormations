<?php
$pageTitle = 'Paiement';
require 'views/partials/header.php';
?>

<div class="container">
    <div class="paiement-box">
        <div class="form-page-header">
            <h1>💳 Simulation de Paiement</h1>
            <p>Choisissez le résultat du paiement pour simuler le tunnel complet</p>
        </div>
        <div class="form-body">

            <?php if ($erreur_paiement): ?>
            <div class="alert alert-error">
                ❌ Paiement refusé. Veuillez réessayer ou choisir un autre mode de paiement.
            </div>
            <?php endif; ?>

            <!-- Récapitulatif -->
            <div class="recap">
                <div class="recap-row">
                    <span>Formation</span>
                    <span><strong><?= htmlspecialchars($inscription['formation_titre']) ?></strong></span>
                </div>
                <div class="recap-row">
                    <span>Étudiant</span>
                    <span><?= htmlspecialchars($inscription['prenom']) ?> <?= htmlspecialchars($inscription['nom']) ?></span>
                </div>
                <div class="recap-row">
                    <span>Email</span>
                    <span><?= htmlspecialchars($inscription['email']) ?></span>
                </div>
                <div class="recap-row">
                    <span>Montant à payer</span>
                    <span style="color:var(--accent);"><?= number_format($inscription['prix'], 2, ',', ' ') ?> DT</span>
                </div>
            </div>

            <p style="font-size:13px; color:var(--muted); margin-bottom:20px; text-align:center;">
                ⚠ Ceci est une simulation — aucun paiement réel n'est effectué
            </p>

            <form method="POST" action="index.php?page=paiement&id=<?= $id ?>">
                <button type="submit" name="mode" value="ok" class="btn-paiement btn-payer">
                    ✅ Paiement réussi (simuler)
                </button>
                <button type="submit" name="mode" value="echec" class="btn-paiement btn-refus">
                    ❌ Paiement refusé (simuler)
                </button>
            </form>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
