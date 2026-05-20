# GestionFormations — Projet PHP MVC
**ISET'COM · 2ème année Licence GTIC · Dr. Asma Ayari · 2025/2026**

## 📋 Description
Plateforme de gestion de formations en ligne développée en PHP avec architecture MVC.
Workflow complet : Formations → Inscription → Paiement fictif → Accès cours.

## 🚀 Installation

### Prérequis
- XAMPP (Apache + MySQL)
- Navigateur web

### Étapes
1. Copier le dossier `GestionFormations/` dans `C:/xampp/htdocs/`
2. Démarrer **Apache** et **MySQL** dans le panneau XAMPP
3. Ouvrir **phpMyAdmin** : http://localhost/phpmyadmin
4. Créer la base : cliquer **SQL** → coller le contenu de `database.sql` → **Go**
5. Ouvrir dans le navigateur : **http://localhost/GestionFormations/**

## 📁 Structure MVC
```
GestionFormations/
├── index.php              ← Routeur central (point d'entrée unique)
├── controllers/           ← Logique métier
│   ├── FormationController.php
│   ├── InscriptionController.php
│   ├── PaiementController.php
│   └── CoursController.php
├── models/                ← Accès base de données
│   ├── Database.php       ← Singleton PDO
│   ├── Formation.php
│   └── Inscription.php
├── views/                 ← Affichage HTML uniquement
│   ├── partials/
│   │   ├── header.php
│   │   └── footer.php
│   ├── home.php
│   ├── formations.php
│   ├── inscription.php
│   ├── paiement.php
│   ├── succes.php
│   └── cours.php
├── assets/
│   └── style.css
└── database.sql
```

## 🧪 Tests
| Étape | URL | Résultat attendu |
|-------|-----|-----------------|
| 1 | `http://localhost/GestionFormations/` | Page d'accueil |
| 2 | `?page=formations` | Liste des 4 formations |
| 3 | `?page=inscription` | Formulaire d'inscription |
| 4 | Soumettre le formulaire | Redirection paiement |
| 5 | Cliquer "Paiement réussi" | Page succès + session |
| 6 | `?page=cours` | Accès aux chapitres |
| 7 | `?page=cours` sans session | Redirection accueil |
