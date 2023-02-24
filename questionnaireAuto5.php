<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <form action="process_form.php" method="post">   

            <div class="form-group">
                    <label for="resiliation">Le conducteur a t'il déjà fait des infractions ?</label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="non">Non</option>
                    <option value="oui">Oui, une infraction</option>
                    <option value="oui2">Oui, 2 infractions</option>
                    <option value="oui3">Oui, 3 infractions</option>
                    </select>
            </div>

            <div class="form-group">
                <label for="dateNaissance">A quelle date le permis annulé a t'il été obtenu</label>
                <input type="datePermisReObtenu" class="form-control" name="datePermisReObtenu">
                </div>

                <div class="form-group">
                    <label for="resiliation">Type d'infraction</label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="non">Aucune</option>
                    <option value="resiliationAlcooDrogue">Anulation de permis</option>
                    <option value="resiliationSinistre">Suspension de permis</option>
                    <option value="resiliationNonPaiement">Attente de jugement</option>
                    <option value="resiliationDeclaration">Dispositif étylotest anti-démarage</option>
                    <option value="resiliationDefautPiece">Composition pénale</option>
                    <option value="resiliationNulliteCOntrat">Contravention de 4eme classe</option>
                    <option value="resiliationAutreMotif">Peine de prison</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="resiliation">Type d'infraction</label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="non">Non</option>
                    <option value="resiliationAlcooDrogue">Refus d'obtemperer</option>
                    <option value="resiliationSinistre">Defaut de point</option>
                    <option value="resiliationNonPaiement">Defaut d'assurance</option>
                    <option value="resiliationDeclaration">Infraction alcoolémie</option>
                    <option value="resiliationDefautPiece">Usage de stupéfiant</option>
                    <option value="resiliationNulliteCOntrat">Délit de fuite</option>
                    <option value="resiliationAutreMotif">Autre motif ?</option>
                    </select>
                </div>

                            
            <div class="form-group">
                    <label for="resiliation">Avec peine de prison ? </label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
                    </select>
            </div>
                
            <div class="form-group">
                    <label for="resiliation">Dans quelle circonstance a eu lieu l'infraction</label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="personnelle">Personnelle</option>
                    <option value="professionnelle">Professionnelle</option>
                    </select>
            </div>

            
            <div class="form-group">
                    <label for="resiliation">L'infraction a eu lieu lors d'un sinistre ?</label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="non">Non</option>
                    <option value="oui">Oui</option>
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
