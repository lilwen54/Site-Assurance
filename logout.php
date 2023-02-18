<?php include 'fixed_content/html_meta.php';//<!DOCTYPE html><html><head><meta>
?>

    <title>DIDDY-ASSURANCE</title>

<?php 
    require 'fixed_content/endHead_Body.php'; //</head><body>
    require 'includes/header.php';


    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
        logout();
        echo 'Vous avez été déconecté';
    }
    else{
        echo 'Vous n\'avez pas été connecté';
    }


    require 'includes/footer.php';
    require 'fixed_content/endBody_endHtml.php';//</body></html>
?>