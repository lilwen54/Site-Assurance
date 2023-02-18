<main class="container my-5">
		<section>
			<h1 class="mb-4">Demande de devis d'assurance</h1>
			<form method="post" action="process.php">
				<div class="form-group row">
					<label for="nom" class="col-sm-2 col-form-label">Nom :</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nom" name="nom" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="prenom" class="col-sm-2 col-form-label">Prénom :</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="prenom" name="prenom" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Adresse email :</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="telephone" class="col-sm-2 col-form-label">Numéro de téléphone :</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telephone" name="telephone" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="assurance" class="col-sm-2 col-form-label">Type d'assurance :</label>
					<div class="col-sm-10">
						<select class="form-control" id="assurance" name="assurance" required>
							<option value="">-- Sélectionnez un type d'assurance --</option>
							<option value="auto">Assurance auto</option>
							<option value="habitation">Assurance habitation</option>
							<option value="sante">Assurance santé</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="message" class="col-sm-2 col-form-label">Message :</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="message" name="message" rows="5"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10 offset-sm-2">
						<button type="submit" class="btn btn-primary">Envoyer</button>
					</div>
				</div>
			</form>
		</section>
	</main>