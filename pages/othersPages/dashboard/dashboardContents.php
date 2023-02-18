<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diddy-Assurance</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style>
        .jumbotron {
            background-image: url('https://picsum.photos/1280/720');
            background-size: cover;
            color: white;
            text-shadow: 1px 1px #000000;
            height: 400px;
            margin-bottom: 0;
            display: flex;
            align-items: center;
        }
        .jumbotron h1 {
            font-size: 4rem;
        }
        .card {
            margin: 10px;
        }
    </style>
</head>
<body>


    <main>
        <div class="jumbotron">
            <div class="container">
                <h1>Dashboard Diddy-Assurance</h1>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Nombre de clients</h4>
                            <p class="card-text">100</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Voir les clients</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Chiffre d'affaires</h4>
                            <p class="card-text">100 000 €</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Voir les détails</a>
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Nouvelles demandes de devis</h5>
                            <h6 class="card-subtitle mb-2 text-muted">En attente de traitement</h6>
                            <p class="card-text">Vous avez <?php $demandes_en_attente=0; echo $demandes_en_attente; ?> nouvelles demandes de devis à traiter.</p>
                            <a href="#" class="card-link">Voir les demandes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Demandes de devis en cours</h5>
                            <h6 class="card-subtitle mb-2 text-muted">En attente de réponse des clients</h6>
                            <p class="card-text">Vous avez <?php $demandes_en_cours=0; echo $demandes_en_cours; ?> demandes de devis en attente de réponse des clients.</p>
                            <a href="#" class="card-link">Voir les demandes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Demandes de devis terminées</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Acceptées ou refusées</h6>
                            <p class="card-text">Vous avez traité <?php $demandes_traitees=0; echo $demandes_traitees; ?> demandes de devis.</p>
                            <a href="#" class="card-link">Voir les demandes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                                
