<?php 

    function loginForm($pdo){
        ?>
        <form action="login.php" method="post" class="form-group">
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <input type="submit" name="submit" value="Se connecter" class="btn btn-primary">
    </form>

    <?php

        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            login($email, $password,$pdo);
        }
    }
    function logout(){
        session_destroy();
        $_SESSION['logged_in'] = false;
    }
    function login($email,$password,$pdo){
        form_send_login();
        $email_exists = check_email_exists_login($email);
        finalizingConnexion($email_exists,$email,$password,$pdo);
    }
    

    function check_password($password, $hashed_password) {
        if (password_verify($password, $hashed_password)) {
            $_SESSION['logged_in'] = true;
            return true;
        } else {
            $_SESSION['logged_in'] = false;
            return false;
        }
    } 
    function change_password($new_password, $user_id) {
        global $pdo;
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("UPDATE user SET password = ? WHERE id = ?");
        $stmt->execute([$hashed_password, $user_id]);
        return $stmt->rowCount() > 0;
    }
    
    function is_logged(){
        //var_dump($_SESSION['logged_in']);
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
            echo 'bonjour, <p>Si tu es ici c\'est que tu as réussi à te connecter</p>';
        }
        else{
            echo 'Bonjour, tu n\'est pas connecté, tu n\'auras accès à rien ici';
        }
    }
    function form_send_login(){
        // Vérifie si les données du formulaire ont été envoyées
        if(isset($_POST) && !empty($_POST)) {
            non_emptyField_login();
        }
    }
    function non_emptyField_login(){
        // Vérifiez si tous les champs sont remplis
        $required_fields = ['email', 'password'];
        foreach($required_fields as $field) {
            if(empty($_POST[$field])) {
                echo "Le champ ".$field." est requis";
                ?> <br> <?php 
                break;
            }
        }
    }
    function check_email_exists_login($email) {
        // check if email exists in database
        global $pdo;
        $stmt = $pdo->prepare("SELECT email FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $result = $stmt->fetch();
        return $result !== false;
    }    
    
    function check_password_match($email, $password) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT password FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $result = $stmt->fetch();
        if($result !== false){
            if(empty($password)){
                return false;
            }
            
            return password_verify($password, $result['password']);
        }else{
            return false;
        }
    }

    function getUserTypeByEmail($email,$pdo) {
        
        $stmt = $pdo->prepare('SELECT user_type FROM user WHERE email = :email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_type = $result['user_type'];
        return $user_type;
    }
    
    function loginSuccessful($password_matches, $user_type) {
        if ($password_matches && $user_type == 'admin') {
            // L'utilisateur est un administrateur et les identifiants sont corrects
            $_SESSION['logged_in'] = true;
            $_SESSION['user_type'] = 'admin'; // Ajout du champ user_type
            echo "Connexion réussie en tant qu'administrateur";
        } else if ($password_matches && $user_type == '' || $user_type == 'regular') {
            // L'utilisateur est un utilisateur régulier et les identifiants sont corrects
            $_SESSION['logged_in'] = true;
            $_SESSION['user_type'] = 'regular'; // Ajout du champ user_type
            echo "Connexion réussie en tant qu'utilisateur régulier";
        } else {
            // Les identifiants sont incorrects ou l'utilisateur n'a pas les autorisations nécessaires
            $_SESSION['logged_in'] = false;
            echo "Identifiants incorrects ou vous n'avez pas les autorisations nécessaires";
        }
    }

    function finalizingConnexion($email_exists, $email, $password, $pdo) {
        if(!$email_exists) {
            echo 'Utilisateur non enregistré ou mot de passe incorrect';
        } else {
            // check if password matches
            $password_matches = check_password_match($email, $password);
            $user_type = getUserTypeByEmail($email, $pdo);
            loginSuccessful($password_matches, $user_type);
        }
    }
    
?>