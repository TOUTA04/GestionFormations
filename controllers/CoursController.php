<?php
// controllers/CoursController.php
// Rôle : préparer les données des cours (accès protégé par session dans index.php)

$formation_titre  = $_SESSION['formation_titre']  ?? 'Formation';
$etudiant_prenom  = $_SESSION['etudiant_prenom']  ?? 'Étudiant';

// Chapitres dynamiques selon la formation
$chapitres_par_formation = [
    'Intelligence Artificielle' => [
        ['num'=>1,'titre'=>'Introduction à l\'IA',        'desc'=>'Histoire, concepts fondamentaux et domaines d\'application de l\'intelligence artificielle.','duree'=>'3h'],
        ['num'=>2,'titre'=>'Machine Learning',             'desc'=>'Algorithmes supervisés et non supervisés : régression, classification, clustering.','duree'=>'8h'],
        ['num'=>3,'titre'=>'Réseaux de neurones',          'desc'=>'Perceptron, rétropropagation, activation functions et deep learning.','duree'=>'10h'],
        ['num'=>4,'titre'=>'Deep Learning avancé',         'desc'=>'CNN, RNN, LSTM et transformers pour la vision et le NLP.','duree'=>'12h'],
        ['num'=>5,'titre'=>'Projet final IA',              'desc'=>'Créez un modèle de classification d\'images avec TensorFlow/Keras.','duree'=>'7h'],
    ],
    'Data Science avec Python' => [
        ['num'=>1,'titre'=>'Python pour la data',          'desc'=>'Fondamentaux Python, listes, dictionnaires, fonctions et fichiers.','duree'=>'5h'],
        ['num'=>2,'titre'=>'NumPy & Pandas',               'desc'=>'Manipulation de tableaux, DataFrames et nettoyage de données.','duree'=>'8h'],
        ['num'=>3,'titre'=>'Visualisation',                'desc'=>'Matplotlib, Seaborn et Plotly pour créer des graphiques expressifs.','duree'=>'6h'],
        ['num'=>4,'titre'=>'Analyse statistique',          'desc'=>'Statistiques descriptives, distributions, tests d\'hypothèses.','duree'=>'8h'],
        ['num'=>5,'titre'=>'Projet Data Science',          'desc'=>'Analyse complète d\'un dataset réel : nettoyage, exploration, modélisation.','duree'=>'8h'],
    ],
    'Développement Web Full Stack' => [
        ['num'=>1,'titre'=>'HTML5 & CSS3',                 'desc'=>'Structure sémantique, Flexbox, Grid et responsive design.','duree'=>'8h'],
        ['num'=>2,'titre'=>'JavaScript ES6+',              'desc'=>'DOM, événements, fetch API, async/await et modules.','duree'=>'10h'],
        ['num'=>3,'titre'=>'PHP Côté serveur',             'desc'=>'Variables, formulaires, sessions, fonctions et POO en PHP.','duree'=>'12h'],
        ['num'=>4,'titre'=>'MySQL & PDO',                  'desc'=>'Modélisation, requêtes SQL, jointures et sécurisation avec PDO.','duree'=>'10h'],
        ['num'=>5,'titre'=>'Architecture MVC',             'desc'=>'Routeur, contrôleurs, modèles et vues — projet complet.','duree'=>'10h'],
    ],
    'Cybersécurité & Ethical Hacking' => [
        ['num'=>1,'titre'=>'Fondamentaux sécurité',        'desc'=>'CIA Triad, menaces, vulnérabilités et modèles de défense.','duree'=>'5h'],
        ['num'=>2,'titre'=>'Réseaux & protocoles',         'desc'=>'TCP/IP, DNS, HTTP/S, firewalls et VPN.','duree'=>'8h'],
        ['num'=>3,'titre'=>'Tests de pénétration',         'desc'=>'Méthodologie pentest : reconnaissance, exploitation, post-exploitation.','duree'=>'12h'],
        ['num'=>4,'titre'=>'Sécurité web',                 'desc'=>'OWASP Top 10 : injections, XSS, CSRF, authentification.','duree'=>'10h'],
        ['num'=>5,'titre'=>'Rapport & remédiation',        'desc'=>'Rédiger un rapport pentest professionnel et proposer des correctifs.','duree'=>'10h'],
    ],
];

// Chercher les chapitres correspondants (correspondance partielle du titre)
$chapitres = [];
foreach ($chapitres_par_formation as $titre => $chaps) {
    if (stripos($formation_titre, explode(' ', $titre)[0]) !== false ||
        stripos($formation_titre, explode(' ', $titre)[1] ?? '') !== false) {
        $chapitres = $chaps;
        break;
    }
}

// Chapitres par défaut si aucune correspondance
if (empty($chapitres)) {
    $chapitres = [
        ['num'=>1,'titre'=>'Introduction',         'desc'=>'Présentation du cours, objectifs et plan de formation.','duree'=>'2h'],
        ['num'=>2,'titre'=>'Concepts fondamentaux','desc'=>'Les bases théoriques et pratiques indispensables.','duree'=>'8h'],
        ['num'=>3,'titre'=>'Pratique guidée',       'desc'=>'Exercices pratiques avec corrections détaillées.','duree'=>'10h'],
        ['num'=>4,'titre'=>'Projet pratique',       'desc'=>'Application des connaissances sur un projet réel.','duree'=>'15h'],
        ['num'=>5,'titre'=>'Évaluation finale',    'desc'=>'Quiz, QCM et projet de certification.','duree'=>'5h'],
    ];
}

require 'views/cours.php';
?>
