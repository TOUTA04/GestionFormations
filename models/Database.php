<?php
// models/Database.php
// Patron Singleton : une seule connexion PDO partagée dans toute l'app.
class Database {
    private static $instance = null;

    public static function connect(): PDO {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO(
                    'mysql:host=localhost;dbname=gestion_formations;charset=utf8mb4',
                    'root',
                    '',
                    [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                die('<div style="font-family:sans-serif;background:#fff5f5;border-left:4px solid #E74C3C;
                     padding:20px;margin:40px auto;max-width:600px;border-radius:8px;">
                     <h2 style="color:#E74C3C;">❌ Erreur de connexion à la base de données</h2>
                     <p>' . htmlspecialchars($e->getMessage()) . '</p>
                     <p style="color:#888;font-size:13px;">
                     Vérifiez que XAMPP est démarré (Apache + MySQL) et que la base 
                     <strong>gestion_formations</strong> existe.<br>
                     Importez le fichier <strong>database.sql</strong> dans phpMyAdmin.
                     </p></div>');
            }
        }
        return self::$instance;
    }
}
?>
