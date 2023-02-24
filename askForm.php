

        <?php include 'fixed_content/html_meta.php';//<!DOCTYPE html><html><head><meta>
?>

    <title>DIDDY-ASSURANCE</title>

<?php 
    require 'fixed_content/endHead_Body.php'; //</head><body>
    require 'includes/header.php';

        //CONTENU VARIABLE
        ?>
    <div class="row">
        <div class="col-md-6">
            <?php require "pages\othersPages\quote\quoteContent.php";?>
        </div>
        <div class="col-md-6">
            <?php require "pages\othersPages\contact/contactContent.php";?>
        </div>
    </div>

<?php
    require 'includes/footer.php';
    require 'fixed_content/endBody_endHtml.php';//</body></html>
?>

<?php 
?>