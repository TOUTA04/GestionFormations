<?php
// ============================================
// index.php — Routeur central (point d'entrée UNIQUE)
// GestionFormations · Architecture MVC
// ISET'COM · Dr. Asma Ayari · 2025-2026
// ============================================

// Démarrer la session PHP (obligatoire avant tout accès à $_SESSION)
session_start();

// Lire le paramètre ?page= dans l'URL (valeur par défaut : 'home')
$page = $_GET['page'] ?? 'home';

// ── PROTECTION SESSION ──────────────────────────────────────────────
// La page 'cours' n'est accessible QUE si le paiement a été validé.
// $_SESSION['paiement_ok'] est mis à true par PaiementController.php
if ($page === 'cours') {
    if (!isset($_SESSION['paiement_ok']) || $_SESSION['paiement_ok'] !== true) {
        header('Location: index.php');
        exit();
    }
}

// ── ROUTAGE ─────────────────────────────────────────────────────────
// Chaque case charge le contrôleur ou la vue correspondante
switch ($page) {

    case 'formations':
        require 'controllers/FormationController.php';
        break;

    case 'inscription':
        require 'controllers/InscriptionController.php';
        break;

    case 'paiement':
        require 'controllers/PaiementController.php';
        break;

    case 'cours':
        require 'controllers/CoursController.php';
        break;

    case 'succes':
        require 'views/succes.php';
        break;

    default:
        // Toute URL inconnue → page d'accueil
        require 'views/home.php';
}
?>
