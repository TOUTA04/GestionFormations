<?php
$pageTitle = 'Formations';
require 'views/partials/header.php';
?>

<div class="container">
    <div class="section">
        <div class="section-title">Toutes nos formations</div>
        <div class="section-sub">
            Choisissez votre formation et inscrivez-vous en quelques clics
        </div>

        <!-- Filtres par niveau -->
        <div style="margin-bottom:28px; display:flex; gap:10px; flex-wrap:wrap; align-items:center;">
            <span style="font-size:14px; color:var(--muted); font-weight:600;">Filtrer par niveau :</span>
            <a href="index.php?page=formations"
               style="padding:6px 16px; border-radius:20px; border:1.5px solid var(--border); font-size:13px; text-decoration:none; color:var(--text);
               <?= empty($niveau) ? 'background:var(--primary);color:#fff;border-color:var(--primary);' : '' ?>">
               Tous</a>
            <?php foreach (['Débutant','Intermédiaire','Avancé'] as $niv): ?>
            <a href="index.php?page=formations&niveau=<?= urlencode($niv) ?>"
               style="padding:6px 16px; border-radius:20px; border:1.5px solid var(--border); font-size:13px; text-decoration:none; color:var(--text);
               <?= (isset($niveau) && $niveau === $niv) ? 'background:var(--primary);color:#fff;border-color:var(--primary);' : '' ?>">
               <?= $niv ?></a>
            <?php endforeach; ?>
        </div>

        <?php if (empty($formations)): ?>
            <div class="alert alert-error">Aucune formation disponible pour ce niveau.</div>
        <?php else: ?>
        <div class="cards-grid">
            <?php foreach ($formations as $f): ?>
            <div class="card">
                <div class="card-header">
                    <h3><?= htmlspecialchars($f['titre']) ?></h3>
                    <p><?= htmlspecialchars($f['niveau']) ?> &nbsp;·&nbsp; <?= htmlspecialchars($f['duree']) ?></p>
                </div>
                <div class="card-body">
                    <p><?= htmlspecialchars($f['description']) ?></p>
                    <div class="prix"><?= number_format($f['prix'], 2, ',', ' ') ?> DT</div>
                    <div class="meta">
                        <span class="badge badge-primary">⏱ <?= htmlspecialchars($f['duree']) ?></span>
                        <?php
                        $badgeClass = match($f['niveau']) {
                            'Débutant'     => 'badge-success',
                            'Intermédiaire'=> 'badge-warning',
                            'Avancé'       => 'badge-danger',
                            default        => 'badge-primary'
                        };
                        ?>
                        <span class="badge <?= $badgeClass ?>"><?= htmlspecialchars($f['niveau']) ?></span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="index.php?page=inscription&formation_id=<?= $f['id'] ?>"
                       class="btn btn-accent btn-block">S'inscrire →</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
