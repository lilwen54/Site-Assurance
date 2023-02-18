<header>
    <?php
    $headerUrl = $_SERVER['PHP_SELF'];
    require 'asset/style/css_Bootstrap.php';
    require_once 'config/database.php';
    require_once 'includes/functions/functions.php';
    ?>
        <div class="conteneur">
            <?php 

                $_SESSION['logged_in'] = false;
                include 'headerFiles/nav.php'; 
            ?>
        </div>
</header>