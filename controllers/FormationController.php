<?php
// controllers/FormationController.php
// Rôle : récupérer les formations depuis le modèle et passer à la vue
require_once 'models/Formation.php';

// Lire le filtre niveau depuis l'URL (optionnel)
$niveau    = isset($_GET['niveau']) ? trim($_GET['niveau']) : '';
$formations = Formation::getAll($niveau);

require 'views/formations.php';
?>
