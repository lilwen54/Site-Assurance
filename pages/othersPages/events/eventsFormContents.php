<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-sm text-center">
            <form action="eventsWrite.php" method="post">   
                <div class="form-group">
                    <label for="contact">Méthode de contact : </label>
                    <select class="form-control" id="contact" name="contact">
                    <option value="email">Email</option>
                    <option value="sms">SMS</option>
                    <option value="appel">Appel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="flux">Flux :<br>(Entrant : on te contacte) - (Sortant : tu contactes la personne) :</label>
                    <select class="form-control" id="flux" name="flux">
                    <option value="flux_entrant">Entrant</option>
                    <option value="flux_sortant">Sortant</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Choisi la date approximative ou tu as traité la demande <br>(Facultatif : A mettre si la date de traitement est trop différente de la date actuelle) :</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="heure">Choisi l'heure approximative ou tu as traité la demande <br>(Facultatif : A mettre si l'heure de traitement est trop différente de l'heure actuelle) :</label>
                    <input type="time" class="form-control" id="heure" name="heure">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea style="  height: 200px; width: 500px text-center;" class="form-control" id="message" name="message"></textarea>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="favori" name="favori">
                    <label class="form-check-label" for="favori">Ajouter aux favoris</label>
                </div>
                <button type="submit" class="btn btn-primary">Soumettre</button>

                <button href="dashboard.php">Event</button>
            </form>
        </div>
    </div>
</div>

<?php
//$events = events_db($pdo);
?>