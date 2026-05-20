-- ============================================
-- GestionFormations — Script de création BD
-- ISET'COM · Dr. Asma Ayari · 2025-2026
-- ============================================

CREATE DATABASE IF NOT EXISTS gestion_formations
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE gestion_formations;

-- Table formations
CREATE TABLE IF NOT EXISTS formations (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    titre       VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    prix        DECIMAL(8,2) NOT NULL DEFAULT 0,
    duree       VARCHAR(30) DEFAULT '20h',
    niveau      VARCHAR(50) DEFAULT 'Tous niveaux',
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table inscriptions
CREATE TABLE IF NOT EXISTS inscriptions (
    id                INT AUTO_INCREMENT PRIMARY KEY,
    nom               VARCHAR(80) NOT NULL,
    prenom            VARCHAR(80) NOT NULL,
    email             VARCHAR(150) NOT NULL,
    formation_id      INT NOT NULL,
    statut_paiement   ENUM('en_attente','paye','echec') DEFAULT 'en_attente',
    date_inscription  DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (formation_id) REFERENCES formations(id) ON DELETE CASCADE
);

-- Données de test
INSERT INTO formations (titre, description, prix, duree, niveau) VALUES
('Intelligence Artificielle',
 'Maîtrisez le machine learning et les réseaux de neurones.',
 299.00, '40h', 'Intermédiaire'),
('Data Science avec Python',
 'Analysez des données avec Python, Pandas et Matplotlib.',
 249.00, '35h', 'Débutant'),
('Développement Web Full Stack',
 'Créez des apps web avec HTML, CSS, PHP et MySQL.',
 199.00, '50h', 'Débutant'),
('Cybersécurité & Ethical Hacking',
 'Apprenez à sécuriser des systèmes et à tester leur résistance.',
 349.00, '45h', 'Avancé');
