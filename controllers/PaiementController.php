<?php
// controllers/PaiementController.php
// Rôle : simuler le paiement et gérer la session
require_once 'models/Inscription.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    header('Location: index.php');
    exit();
}

$inscription     = Inscription::getById($id);
$erreur_paiement = false;

if (!$inscription) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mode = $_POST['mode'] ?? '';

    if ($mode === 'ok') {
        // ── Paiement réussi ──────────────────────────────
        // 1. Mettre à jour le statut en BD
        Inscription::marquerPaye($id);

        // 2. Stocker les infos en SESSION
        $_SESSION['paiement_ok']      = true;
        $_SESSION['inscription_id']   = $id;
        $_SESSION['formation_titre']  = $inscription['formation_titre'];
        $_SESSION['etudiant_prenom']  = $inscription['prenom'];

        // 3. Rediriger vers la page de confirmation
        header('Location: index.php?page=succes&id=' . $id);
        exit();

    } else {
        // Paiement refusé
        $erreur_paiement = true;
    }
}

require 'views/paiement.php';
?>
