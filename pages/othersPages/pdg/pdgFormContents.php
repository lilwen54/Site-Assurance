
<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <form action="process_form.php" method="post">   

                <div class="form-group">
                    <label for="civilite">Civilité</label>
                    <select class="form-control" id="flux" name="flux">
                    <option value="monsieur">Mr</option>
                    <option value="madame">Mme</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="fonction">Fonction dans l'entreprise</label>
                <input type="text" class="form-control" name="fonction">
                </div>

                <div class="form-group">
                <label for="nomPdg">Nom</label>
                <input type="text" class="form-control" name="nomPdg">
                </div>

                <div class="form-group">
                <label for="prenomPdg">Prénom</label>
                <input type="text" class="form-control" name="prenomPdg">
                </div>

                <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" name="address">
                </div>

                <div class="form-group">
                <label for="activite">Activité</label>
                <input type="text" class="form-control" name="activite">
                </div>

                <div class="form-group">
                <label for="codePostal">Code Postal</label>
                <input type="text" class="form-control" name="codePostal">
                </div>

                <div class="form-group">
                <label for="city">Ville</label>
                <input type="text" class="form-control" name="city">
                </div>

                <div class="form-group">
                <label for="phone1">Téléphone 1</label>
                <input type="text" class="form-control" name="phone1">
                </div>

                <div class="form-group">
                <label for="phone2">Téléphone 2</label>
                <input type="text" class="form-control" name="phone2">
                </div>

                <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    $pdo = null;
?>