<?php
/*
    // Vérification de la méthode de requête
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire
        $SIRET = $_POST['SIRET'];
        $codeNaf = $_POST['codeNaf'];
        $address = $_POST['address'];
        $activite = $_POST['activite'];
        $codePostal = $_POST['codePostal'];
        $city = $_POST['city'];
        $phone1 = $_POST['phone1'];
        $phone2 = $_POST['phone2'];

        // Préparation et exécution de la requête
        $sql = 'INSERT INTO firm (SIRET, codeNaf, address, activite, codePostal, city, phone1, phone2) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$SIRET, $codeNaf, $address, $activite, $codePostal, $city, $phone1, $phone2]);

        // Fermeture de la connexion à la base de données
        $pdo = null;

        // Redirection vers une page de confirmation
        header('Location: confirmation.php');
        exit;
    }
    */
?>
