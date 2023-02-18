<?php

    if(isset($_POST) && !empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    
    if (isset($_POST) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
    }

function check_email_exists($email) {
        // check if email exists in database
        global $pdo;
        $stmt = $pdo->prepare("SELECT email FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $result = $stmt->fetch();
        return $result !== false;
    }
?>