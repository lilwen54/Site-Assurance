<?php    
    function registerForm(){
        ?>
            <form action="register.php" method="post" class="form-group">
                <div class="form-group">
                    <label for="firstname">Prénom :</label>
                    <input type="text" id="firstname" name="firstname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lastname">Nom :</label>
                    <input type="text" id="lastname" name="lastname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email_verification">Confirmation email :</label>
                    <input type="email" id="email_verification" name="email_verification" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password_verification">Confirmation mot de passe :</label>
                    <input type="password" id="password_verification" name="password_verification" class="form-control">
                </div>
                <input type="submit" name="submit" value="S'inscrire" class="btn btn-primary">
            </form>
        <?php
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                register($email,$password,$firstname,$lastname);
            }
    }
    function register($email,$password,$firstname,$lastname){
        $email_exists = check_email_exists($email); // Vérifie si l'adresse e-mail existe déjà dans la base de données
        form_send_register(); // Vérifie si les données du formulaire ont été envoyées
        finalizingRegistration($email_exists,$email,$password,$firstname,$lastname);
        }



    function form_send_register(){
        // Vérifiez si les données du formulaire ont été envoyées
        if(isset($_POST) && !empty($_POST)) {
            non_emptyField_register(); // Vérifie si tous les champs sont remplis
        }

    }
    function non_emptyField_register(){
        // Vérifiez si tous les champs sont remplis
        $required_fields = ['firstname', 'lastname', 'email', 'password', 'email_verification', 'password_verification'];
        foreach($required_fields as $field) {
            if(empty($_POST[$field])) {
                echo "Le champ ".$field." est requis";
                break;
            }
        }
    }

    function finalizingRegistration($email_exists,$email,$password,$firstname,$lastname){
        if($email_exists){
            echo `utilisateur déjà inscrit`;
        }
        else{
            registerSuccessful($email,$password,$firstname,$lastname);
        }
    }

    function registerSuccessful($email,$password,$firstname,$lastname){
    check_similar_email($email,$password,$firstname,$lastname);

    }

    function check_similar_email($email,$password,$firstname,$lastname){
        if($email==$_POST['email_verification']){
            chech_similar_password($email,$password,$firstname,$lastname);
        } else {
            echo 'les emails ne correspondent pas';
        }
    }

    function chech_similar_password($email,$password,$firstname,$lastname){
        if($_POST['password']== $_POST['password_verification']){
            //SI LES MOTS DE PASSE CORRESPONDENT ==> INSERER LES DONNEES DANS LA BASE DE DONNEE
            global $pdo;
            $sql = "INSERT INTO user(firstname, lastname, email, password) VALUES(?,?,?,?)";
            $password = password_hash($password, PASSWORD_ARGON2I);
            $row = $pdo->prepare($sql)->execute([$firstname, $lastname, $email, $password]);
                //Message
                if ($row > 0){
                    echo "<br>" . 'Merci de vous connecter : ';
                    ?> <a href="login.php">Se connecter</a> <?php
                }else{
                    echo 'Erreur';
                }
        } else {
            echo 'les mots de passe ne correspondent pas';
        }
    }
?>