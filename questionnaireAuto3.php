<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <form action="process_form.php" method="post">   

                <div class="form-group">
                <label for="DatePermisA">Date d'obtention du permis A</label>
                <input type="date" class="form-control" name="immatriculation">
                </div>

                <div class="form-group">
                <label for="paysPermisA">Lieu/Pays d'obtention du permis A</label>
                <input type="text" class="form-control" name="immatriculation">
                </div>

                
                <div class="form-group">
                <label for="dateNaissance">Date de Naissance</label>
                <input type="date" class="form-control" name="dateNaissance">
                </div>

                <div class="form-group">
                <label for="villeNaissance">Pays de Naissance</label>
                <input type="text" class="form-control" name="villeNaissance">
                </div>

                
                <div class="form-group">
                <label for="villeNaissance">Ville de Naissance</label>
                <input type="text" class="form-control" name="villeNaissance">
                </div>
              
                <div class="form-group">
                    <label for="vehiculeAssuré">Exercez-vous une profession en rapport à l'industrie du spectacle ou du sport professionnel</label>
                    <select class="form-control" id="spectacleOuSportPro" name="spectacleOuSportPro">
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="civilite">Catégorie CSP/profession du conducteur ?</label>
                    <select class="form-control" id="flux" name="flux">
                    <option value="salarie">Salarié</option>
                    <option value="salarieNonSedentaire">Salarié non sédentaire ( en déplacement)</option>
                    <option value="retraite">Retraité</option>
                    <option value="fonctionnaire">Fonctionnaire</option>
                    <option value="fonctionnaireNonSedentaire">Fonctionnaire non sédentaire ( en déplacement)</option>
                    <option value="sansProfession">Sans profession</option>
                    </select>
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
