<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <form action="process_form.php" method="post">   
                    <div class="form-group">
                <label for="birthday">Date de naissance</label>
                <input type="text" class="form-control" name="birthday">
                </div>
                <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" name="address">
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
                <label for="phone1">Téléphone</label>
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

<?php
    $pdo = null;
?>