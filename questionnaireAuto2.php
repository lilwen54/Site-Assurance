<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <form action="process_form.php" method="post">   

                <div class="form-group">
                    <label for="modeStationnement">Mode de stationnement du véhicule</label>
                    <select class="form-control" id="modeStationnement" name="modeStationnement">
                    <option value="garage">Garage fermé (clos)</option>
                    <option value="parkingPrivé">Parking Privé</option>
                    <option value="voiePublique">Voie Publique</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kilométragePrevu">Kilométrage prévu sur l'année</label>
                    <select class="form-control" id="kilométragePrevu" name="kilométragePrevu">
                    <option value="3000km">- de 3000 km</option>
                    <option value="5000km">Entre 3000 km et 5000 km</option>
                    <option value="8000km">Entre 5000 km et 8000 km</option>
                    <option value="illimité">+ de 8000 km</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="immatriculation">Plaque d'immatriculation</label>
                <input type="text" class="form-control" name="immatriculation">
                </div>

                <div class="form-group">
                <label for="marque">Marque</label>
                <input type="text" class="form-control" name="marque">
                </div>

                <div class="form-group">
                <label for="modele">Modele</label>
                <input type="text" class="form-control" name="modele">
                </div>

                <div class="form-group">
                <label for="prixNeuf">Prix à neuf</label>
                <input type="text" class="form-control" name="prixNeuf">
                </div>

                <div class="form-group">
                <label for="premiereMiseEnCirculation">Date de 1ère mise en circulation</label>
                <input type="date" class="form-control" name="premiereMiseEnCirculation">
                </div>

                <div class="form-group">
                <label for="valeurAchat">Valeur d'achat</label>
                <input type="text" class="form-control" name="valeurAchat">
                </div>

                <div class="form-group">
                <label for="dateAchat">Date d'achat</label>
                <input type="text" class="form-control" name="dateAchat">
                </div>

                <div class="form-group">
                <label for="DesignationVehicule">Designation/Finition du véhicule</label>
                <input type="text" class="form-control" name="DesignationVehicule">
                </div>

                <div class="form-group">
                <label for="kilometrageVehicule">Kilometrage  du véhicule</label>
                <input type="text" class="form-control" name="kilometrageVehicule">
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
