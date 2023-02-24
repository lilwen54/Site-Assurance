
<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <div class="card-header text-center">
                <h4>Entreprise</h4>
            </div>
            <form action="process_form.php" method="post">

                <div class="form-group">
                <label for="SIRET">SIRET</label>
                <input type="text" class="form-control" name="SIRET">
                </div>

                <div class="form-group">
                <label for="codeNaf">Code NAF</label>
                <input type="text" class="form-control" name="codeNaf">
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
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    $pdo = null;
?>