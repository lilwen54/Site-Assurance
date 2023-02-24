<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <form action="process_form.php" method="post">   

            <div class="form-group">
                    <label for="resiliation">Le conducteur a t'il déjà été assuré ?</label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                    </select>
            </div>

            <div class="form-group">
                <label for="moisAssurance">nombre de mois d'assurance</label>
                <select name="mois[]" multiple size="5">
                    <?php
                        // Obtenir la date actuelle
                        $date = new DateTime();
                        
                        // Boucle pour les 60 derniers mois (5 ans)
                        for ($i = 0; $i < 60; $i++) {
                        // Obtenir le mois et l'année
                        $mois = $date->format('m');
                        $annee = $date->format('Y');
                        
                        // Ajouter l'option à la liste déroulante
                        echo '<option value="' . $annee . '-' . $mois . '">' . $mois . '/' . $annee . '</option>';
                        
                        // Décrémenter d'un mois
                        $date->sub(new DateInterval('P1M'));
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="CRM">Coefficient de Bonus/Malus ou Coefficient de Réduction Majoration CRM</label>
                <select name="nombre">
                    <?php
                        // Boucle pour les nombres décimaux entre 0.50 et 3.00
                        for ($i = 50; $i <= 300; $i++) {
                        $nombre = $i / 100;
                        
                        // Ajouter l'option à la liste déroulante
                        echo '<option value="' . $nombre . '">' . $nombre . '</option>';
                        }
                    ?>
                </select>
            </div>


                <div class="form-group">
                    <label for="resiliation">Le conducteur a t'il eu une ou plusieurs résiliation(s) d'assurance ?</label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="non">Non</option>
                    <option value="resiliationAlcooDrogue">Résiliation pour alcoolémie ou consomation de stupéfiants/drogues</option>
                    <option value="resiliationSinistre">Résiliation suite à sinistre</option>
                    <option value="resiliationNonPaiement">Résiliation pour non paiement</option>
                    <option value="resiliationDeclaration">Résiliation pour fausse déclaration ou résiliation pour déclaration inexacte</option>
                    <option value="resiliationDefautPiece">Résiliation pour défaut de pièces</option>
                    <option value="resiliationNulliteCOntrat">Résiliation pour nullité de contrat</option>
                    <option value="resiliationAutreMotif">Autre motif ?</option>
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
