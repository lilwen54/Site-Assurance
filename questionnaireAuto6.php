<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <form action="process_form.php" method="post">   

            <div class="form-group">
                    <label for="resiliation">Le conducteur a t'il déjà eu 1 ou plusieurs sinistres ?</label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="non">Non</option>
                    <option value="oui">Oui, 1</option>
                    <option value="oui2">Oui, 2 </option>
                    <option value="oui3">Oui, 3</option>
                    <option value="oui4">Oui, 4</option>
                    <option value="oui5">Oui, 5</option>
                    </select>
            </div>

            <div class="form-group">
                <label for="dateSinistre">Date du sinistre</label>
                <input type="datePermisReObtenu" class="form-control" name="dateSinistre">
                </div>

                <div class="form-group">
                    <label for="resiliation">Nature Sinistre</label>
                    <select class="form-control" id="resiliation" name="resiliation">
                    <option value="dommagesCorporels">Dommages corporels</option>
                    <option value="resiliationAlcooDrogue">Dommages materiels</option>
                    <option value="resiliationSinistre">Incendie>
                    <option value="resiliationNonPaiement">Vol</option>
                    <option value="resiliationDeclaration">Bris de Glace</option>
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
