<?php include 'fixed_content/html_meta.php';//<!DOCTYPE html><html><head><meta>
?>

    <title>DIDDY-ASSURANCE</title>

    <?php

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['user_type'] !== 'admin') {
    // Redirige l'utilisateur vers la page de connexion
    header('Location: login.php');
    exit;
}


// Si l'utilisateur est connecté, affichez le contenu de la page restreinte
?>

<!-- Code HTML de la page restreinte -->

<?php
// Vérifie si la requête SQL a réussi
if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['user_type'] = $row['user_type'];
}

// Fermeture de la connexion à la base de données
$conn = null;
?>


<?php 
    require 'fixed_content/endHead_Body.php'; //</head><body>
    require 'includes/header.php';
    

    events_view($pdo); //CONTENU VARIABLE
    require 'includes/footer.php';
    require 'fixed_content/endBody_endHtml.php';//</body></html>


?>