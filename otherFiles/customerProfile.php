<?php
require_once '../../includes/header.php';

function display_user_info($user) {
    echo "ID: " . $user['id'] . "<br>";
    echo "Nom d'utilisateur: " . $user['username'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";
    // afficher les autres informations de l'utilisateur ici
}

$user_id = 1; // par exemple, l'identifiant de l'utilisateur que vous voulez afficher
$user = get_user_by_id($pdo, $user_id);

if ($user) {
    display_user_info($user);
} else {
    echo "Utilisateur non trouvé.";
}


$user_id = 1; // remplacez par l'id du client connecté

function get_user_by_id($pdo, $user_id) {
    $stmt = $pdo->prepare("SELECT * FROM user WHERE id = :id");
    $stmt->bindValue(':id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  

$user = get_user_by_id($pdo, $user_id); // fonction get_user_by_id définie dans functions.php

?>



<?php
include_once '../userForm2.php';
include_once '../../includes/footer.php';
?>
