<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' — GestionFormations' : 'GestionFormations' ?></title>
    <link rel="stylesheet" href="assets/style.css?v=2">
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="navbar-brand">Gestion<span>Formations</span></a>
    <ul class="navbar-nav">
        <li><a href="index.php"
            <?= (!isset($_GET['page']) || $_GET['page'] === 'home') ? 'class="active"' : '' ?>>
            Accueil</a></li>
        <li><a href="index.php?page=formations"
            <?= (isset($_GET['page']) && $_GET['page'] === 'formations') ? 'class="active"' : '' ?>>
            Formations</a></li>
        <li><a href="index.php?page=inscription"
            <?= (isset($_GET['page']) && $_GET['page'] === 'inscription') ? 'class="active"' : '' ?>>
            S'inscrire</a></li>
    </ul>
</nav>
