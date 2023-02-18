<?php

    function events_write($pdo) {

    if (isset($_POST['contact']) && isset($_POST['flux']) && isset($_POST['date']) && isset($_POST['heure']) && isset($_POST['message'])){

        // Récupérer les données du formulaire
        $contact = $_POST['contact'];
        $flux = $_POST['flux'];
        // Récupération de la date actuelle au format "AAAA-MM-JJ"
        $date_now = date('Y-m-d H:i:s');
        $date = $_POST['date'];
        $heure = $_POST['heure'];
        $message = $_POST['message'];
        $favori = (isset($_POST['favori']) ? 1 : 0);

        try {
            $stmt = $pdo->prepare("INSERT INTO event (contact, flux, date_now, date, heure, message, favori) VALUES (:contact, :flux, :date_now, :date, :heure, :message, :favori)");
            $stmt->bindParam(':contact', $contact);
            $stmt->bindParam(':flux', $flux);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':date_now', $date_now);
            $stmt->bindParam(':heure', $heure);
            $stmt->bindParam(':message', $message);
            $stmt->bindParam(':favori', $favori);
            $stmt->execute();
            echo "Les données ont été ajoutées avec succès.";
            // Rediriger vers la page "events.php"
            header("Location: events.php");
            exit();
        } catch(PDOException $e) {
            echo "Une erreur s'est produite lors de l'ajout des données : " . $e->getMessage();
        }
    }
    }
    function events_db($pdo) {
        $events = array();
        try {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $query = "SELECT * FROM event";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            if (count($result) > 0) {
                foreach ($result as $row) {
                    $contact = $row['contact'];
                    $flux = $row['flux'];
                    $date = $row['date'];
                    $date_now = $row['date_now'];
                    $heure = $row['heure'];
                    $message = $row['message'];
                    $favori = $row['favori'];
        
                    $events[] = array(
                        'contact' => $contact,
                        'flux' => $flux,
                        'date' => $date,
                        'date_now' => $date_now,
                        'heure' => $heure,
                        'message' => $message,
                        'favori' => $favori,
                    );
                }
            }
        
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    
        return $events;
    }
    

    
    function events_view($pdo) {
        // Récupérer les événements depuis la base de données
        $events = events_db($pdo);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Liste des événements</title>
            <!-- Import de Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <h1>Liste des événements</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Contact</th>
                            <th>Flux</th>
                            <th>Date de publication</th>
                            <th>Heure</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th>Favoris</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($events as $event): ?>
                            <tr>
                                <td><?= $event['contact'] ?></td>
                                <td><?= $event['flux'] ?></td>
                                <td><?= $event['date_now'] ?></td>
                                <td><?= $event['heure'] ?></td>
                                <td><?= $event['date'] ?></td>
                                <td><?= $event['message'] ?></td>
                                <td><?= $event['favori'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php
    }
    
?>