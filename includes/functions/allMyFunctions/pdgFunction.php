<?php
    //connexion à la base de données
    $dsn = 'mysql:host=loginsystem;dbname=pdg';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        exit;
    }

    // Vérification de la méthode de requête
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire
        $civilite = $_POST['civilite'];
        $fonction = $_POST['fonction'];
        $nomPdg = $_POST['nomPdg'];
        $prenomPdg = $_POST['prenomPdg'];
        $address = $_POST['address'];
        $activite = $_POST['activite'];
        $codePostal = $_POST['codePostal'];
        $city = $_POST['city'];
        $phone1 = $_POST['phone1'];
        $phone2 = $_POST['phone2'];
        $email = $_POST['email'];

        // Préparation et exécution de la requête
        $sql = 'INSERT INTO formulaire_2 (civilite, fonction, nomPdg, prenomPdg, address, activite, codePostal, city, phone1, phone2, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$civilite, $fonction, $nom, $nomPdg, $prenomPdg, $address, $activite, $codePostal, $city, $phone1, $phone2, $email]);
        
        // Fermeture de la connexion à la base de données
        $pdo = null;

        // Redirection vers une page de confirmation
        header('Location: confirmation.php');
        exit;
    }