<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Mon profil</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" name="lastname" value="<?= $user['name'] ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Adresse email</label>
                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control" name="email" value="<?= $user['email'] ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Numéro de téléphone</label>
                        <div class="col-md-8">
                            <input id="phone" type="text" class="form-control" name="phone" value="<?= $user['phone'] ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">Adresse</label>
                        <div class="col-md-8">
                            <input id="address" type="text" class="form-control" name="address" value="<?= $user['address'] ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">Ville</label>
                        <div class="col-md-8">
                            <input id="city" type="text" class="form-control" name="city" value="<?= $user['city'] ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="zip_code" class="col-md-4 col-form-label text-md-right">Code postal</label>
                        <div class="col-md-8">
                            <input id="zip_code" type="text" class="form-control" name="zip_code" value="<?= $user['zip_code'] ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="edit_profile.php" class="btn btn-primary">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>