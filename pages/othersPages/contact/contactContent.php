
    <main>
        <section>
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-sm text-center">
                        <h1>Formulaire de contact</h1>
                        <form action="mailbox.php" method="post">
                            <div class="form-group">
                                <label for="pseudo">Pseudo :</label>
                                <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="Entrer un pseudo">
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Entrer un Email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message :</label>
                                <textarea id="message" name="message" class="form-control" rows="5"></textarea>
                            </div>
                            <input type="hidden" name="destinataire" value="test@test.fr">
                            <input type="submit" value="Envoyer" class="btn btn-primary">
                        </form>

                    </div>
                </div>
            </div>

        </section>
    </main>

<?php
if(isset($_POST) && !empty($_POST)) {
    $destinataire = "test@test.fr";
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = 'From: '.$email;
    mail($destinataire, 'Formulaire de contact', $message, $headers);
    echo 'Votre message a été envoyé avec succès !';
    }
?>