<?php include 'fixed_content/html_meta.php';//<!DOCTYPE html><html><head><meta>
?>

    <title>DIDDY-ASSURANCE</title>

<?php 
    require 'fixed_content/endHead_Body.php'; //</head><body>
    require 'includes/header.php';
?>

<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <?php
                var_dump($_SESSION);
                loginForm($pdo); //CONTENU VARIABLE
                var_dump($_SESSION);
                
            ?>
            
        </div>
    </div>
</div>


<?php
    require 'includes/footer.php';
    require 'fixed_content/endBody_endHtml.php';//</body></html>
?>
