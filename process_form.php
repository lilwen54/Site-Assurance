<?php include 'fixed_content/html_meta.php';//<!DOCTYPE html><html><head><meta>
?>

    <title>DIDDY-ASSURANCE</title>

<?php 
    require 'fixed_content/endHead_Body.php'; //</head><body>
    require 'includes/header.php';

    // Récupérer les événements
    $events = $pdo;
    events_write($pdo);

    require 'includes/footer.php';
    require 'fixed_content/endBody_endHtml.php';//</body></html>
?>

