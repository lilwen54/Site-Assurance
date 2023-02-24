<?php
// Données factices pour les produits d'assurance
$produits = array(
    array(
        "titre" => "Assurance habitation",
        "description" => "Protégez votre habitation et vos biens contre les risques liés aux incendies, aux dégâts des eaux et aux cambriolages.",
        "prix" => "à partir de 15€/mois"
    ),
    array(
        "titre" => "Assurance auto",
        "description" => "Assurez votre véhicule et bénéficiez d'une protection complète contre les accidents, les vols et les dommages causés à autrui.",
        "prix" => "à partir de 25€/mois"
    ),
    array(
        "titre" => "Assurance santé",
        "description" => "Optez pour une complémentaire santé qui prend en charge vos dépenses de santé non remboursées par la sécurité sociale.",
        "prix" => "à partir de 30€/mois"
    ),
    array(
        "titre" => "Assurance vie",
        "description" => "Préparez l'avenir de vos proches en souscrivant une assurance vie qui leur garantit un capital ou une rente en cas de décès.",
        "prix" => "à partir de 50€/mois"
    )
);
?>

    <main class="my-5">
        <section>
            <h1 class="text-center mb-5">Nos produits d'assurance</h1>
            <div class="container">
                <div class="row">
                    <?php foreach ($produits as $produit) { ?>
                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="card-title"><?php echo $produit['titre']; ?></h2>
                                    <p class="card-text"><?php echo $produit['description']; ?></p>
                                    <p class="card-footer">A partir de <?php echo $produit['prix']; ?></p>
                                    <a href="quote.php" class="btn btn-primary">Souscrire</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

<!---->

    <section>
        <div class="container">
            <h1 class="text-center mb-5">Nos catégories de produits d'assurance</h1>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <h2 class="text-center mb-4">Particuliers</h2>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">IARD</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Habitation</li>
                                <li>Auto</li>
                                <li>Moto</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h3 class="card-title">Santé Prévoyance</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Santé</li>
                                <li>Prévoyance</li>
                                <li>Obsèques</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <h2 class="text-center mb-4">Professionnels</h2>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">IARD</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Habitation</li>
                                <li>Auto</li>
                                <li>Moto</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h3 class="card-title">Santé Prévoyance</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Santé</li>
                                <li>Prévoyance</li>
                                <li>Obsèques</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>