<?php
$pageTitle = 'Inscription';
require 'views/partials/header.php';
?>

<div class="container">
    <div class="form-page" style="margin:40px auto;">
        <div class="form-page-header">
            <h1>📝 Formulaire d'Inscription</h1>
            <p>Remplissez le formulaire pour vous inscrire à une formation</p>
        </div>
        <div class="form-body">

            <?php if (!empty($erreurs)): ?>
            <div class="alert alert-error">
                <strong>❌ Erreurs détectées :</strong>
                <ul>
                    <?php foreach ($erreurs as $e): ?>
                        <li><?= htmlspecialchars($e) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <form method="POST" action="index.php?page=inscription">

                <div class="form-group">
                    <label>Nom <span class="required">*</span></label>
                    <input type="text" name="nom"
                        value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>"
                        placeholder="Ex : Ben Ali" required>
                </div>

                <div class="form-group">
                    <label>Prénom <span class="required">*</span></label>
                    <input type="text" name="prenom"
                        value="<?= htmlspecialchars($_POST['prenom'] ?? '') ?>"
                        placeholder="Ex : Asma" required>
                </div>

                <div class="form-group">
                    <label>Adresse Email <span class="required">*</span></label>
                    <input type="email" name="email"
                        value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                        placeholder="exemple@email.com" required>
                </div>

                <div class="form-group">
                    <label>Formation choisie <span class="required">*</span></label>
                    <select name="formation_id" required>
                        <option value="">-- Choisir une formation --</option>
                        <?php foreach ($formations as $f): ?>
                        <option value="<?= $f['id'] ?>"
                            <?= ($formation_preselect == $f['id']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($f['titre']) ?> — <?= number_format($f['prix'], 2, ',', ' ') ?> DT
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-accent btn-block"
                    style="font-size:15px; padding:13px;">
                    Continuer vers le paiement →
                </button>
            </form>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
