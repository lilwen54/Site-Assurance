<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <form action="process_form.php" method="post">   

                <div class="form-group">
                    <label for="civilite">Type d'energie</label>
                    <select class="form-control" id="flux" name="flux">
                    <option value="essence">Essence</option>
                    <option value="gasoil">Gasoil/Diesel</option>
                    <option value="hybride">hybride</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="civilite">Type d'energie</label>
                    <select class="form-control" id="flux" name="flux">
                    <option value="classic">Habitacle classique</option>
                    <option value="midopen">Toit Ouvrant</option>
                    <option value="open">Décapotable</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="immatriculation">Plaque d'immatriculation</label>
                <input type="text" class="form-control" name="immatriculation">
                </div>

                <div class="form-group">
                    <label for="immatriculeEtranger">Véhicule immatriculé a l'étranger</label>
                    <select class="form-control" id="immatriculeEtranger" name="immatriculeEtranger">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="remorqueCaravane">Ajouter une remorque ou une caravane</label>
                    <select class="form-control" id="remorqueCaravane" name="remorqueCaravane">
                    <option value="non">Non</option>
                    <option value="500kg">- de 500kg</option>
                    <option value="749kg">Entre 500kg et 749kg</option>
                    <option value="superieur749kg">+ de 749kg</option>
                    </select>
                </div>

                
                <div class="form-group">
                    <label for="vehiculeAssuré">Véhicule actuellement assuré par le client</label>
                    <select class="form-control" id="vehiculeAssuré" name="vehiculeAssuré">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="vehiculeAssuré">Mode de financement du Véhicule</label>
                    <select class="form-control" id="vehiculeAssuré" name="vehiculeAssuré">
                    <option value="autofinancement">Autofinancement ( Comptant ) ou Crédit</option>
                    <option value="leasing">En Leasing LOA ou LDD</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="titulaireCarteGrise">Titulaire de la carte grise</label>
                    <select class="form-control" id="titulaireCarteGrise" name="titulaireCarteGrise">
                    <option value="souscripteur">Le souscripteur</option>
                    <option value="entreprise">Une entreprise appartenant au souscripteur</option>
                    <option value="conducteurPrincipal">Le conducteur principal</option>
                    <option value="conjoint">Le conjoint</option>
                    <option value="conducteurSecondaire">Le conducteur secondaire</option>
                    <option value="parent">Un parent ascendant(père, mère ou grands parents)</option>
                    <option value="organisme">Un organisme financier</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tempsNonAssure">Depuis combien d etemps le véhicule n'est t'il plus assuré par le client ?</label>
                    <select class="form-control" id="tempsNonAssure" name="tempsNonAssure">
                    <option value="3mois">Depuis moins de 3 mois</option>
                    <option value="6mois">Depuis moins de 6 mois</option>
                    <option value="12mois">Depuis moins de 12 mois (- de 1 an)</option>
                    <option value="24mois">Depuis moins de 24 mois (- de 2 ans)</option>
                    <option value="36mois">Depuis moins de 36 mois (- de 3 ans)</option>
                    <option value="60mois">Depuis moins de 60 mois (- de 5 ans)</option>
                    <option value="60mois">Depuis plus de 60 mois (+ de 5 ans)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="transformations">Le véhicule a t'il subi des transformations ou modification technique</label>
                    <select class="form-control" id="transformations" name="transformations">
                    <option value="non">Non (il est de série)</option>
                    <option value="oui">Oui (il a été customisé)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="civilite">Utilisation du véhicule</label>
                    <select class="form-control" id="flux" name="flux">
                    <option value="vieprivee">Vie privée</option>
                    <option value="travail">Vie privée + trajet domicile - lieu de travail</option>
                    <option value="deplacementsProfessionnelsIrréguliers">Vie privée + déplacements professionnels non réguliers</option>
                    <option value="tousDeplacement">Tous déplacements</option>
                    </select>
                </div>

                
                <div class="form-group">
                <label for="marque">Lieu de stationnement du véhicule</label>
                <input type="text" class="form-control" name="lieuStationnement">
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
