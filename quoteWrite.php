<?php include 'fixed_content/html_meta.php';//<!DOCTYPE html><html><head><meta>
?>

    <title>DIDDY-ASSURANCE</title>

<?php 
    require 'fixed_content/endHead_Body.php'; //</head><body>
    require 'includes/header.php';

        require 'pages/othersPages/quote/quoteContent.php'; //CONTENU VARIABLE

    require 'includes/footer.php';
    require 'fixed_content/endBody_endHtml.php';//</body></html>
?>

<?php
/*
// Définir les informations de connexion à la base de données
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$dbname = "nom_de_la_base_de_donnees";

// Créer une connexion PDO
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // Activer les erreurs PDO
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Erreur de connexion : " . $e->getMessage();
}*/

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $assurance = $_POST['assurance'];
  $message = $_POST['message'];

  // Préparer la requête SQL pour insérer les données dans la base de données
  $stmt = $conn->prepare("INSERT INTO formulaire_assurance (nom, prenom, email, telephone, assurance, message) VALUES (:nom, :prenom, :email, :telephone, :assurance, :message)");

  // Lier les paramètres à la requête préparée
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':prenom', $prenom);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':telephone', $telephone);
  $stmt->bindParam(':assurance', $assurance);
  $stmt->bindParam(':message', $message);

  // Exécuter la requête préparée
  $stmt->execute();

  // Rediriger l'utilisateur vers une page de confirmation
  header('Location: confirmation.php');
  exit();
}
?>
