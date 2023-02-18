<?php

require_once 'global.php';

$dbName = DB_NAME;
$dbHost = DB_HOST;
$dbUser = DB_USER;
$dbPassword = DB_PASSWORD;

$dsn = "mysql:host=$dbHost;port=3306;dbname=$dbName";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    echo "Connexion à la base de données échouée : " . $e->getMessage();
}
?>