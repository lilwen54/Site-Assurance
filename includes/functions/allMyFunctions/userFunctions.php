<?php
    function infos_user_write($pdo) {

        if (isset($_POST['birthday']) && isset($_POST['address']) && isset($_POST['codePostale']) && isset($_POST['city']) && isset($_POST['phone1']) && isset($_POST['phone2'])){

            // Récupérer les données du formulaire
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            // Récupération de la date actuelle au format "AAAA-MM-JJ"
            $date_now_user_infos = date('Y-m-d H:i:s');
            $codePostal = $_POST['codePostal'];
            $city = $_POST['city'];
            $phone1 = $_POST['phone1'];
            $phone2 = $_POST['phone2'];

            try {
                $stmt = $pdo->prepare("INSERT INTO infos_user (birthday, address, date_now_user_infos, codePostal, city, phone1, phone2) VALUES (:birthday, :address, :date_now_user_infos, :codePostal, :city, :phone1, :phone2)");
                $stmt->bindParam(':birthday', $birthday);
                $stmt->bindParam(':address', $address);
                $stmt->bindParam(':codePostal', $codePostal);
                $stmt->bindParam(':date_now_user_infos', $date_now_user_infos);
                $stmt->bindParam(':city', $city);
                $stmt->bindParam(':phone1', $phone1);
                $stmt->bindParam(':phone2', $phone2);
                $stmt->execute();
                echo "Les données ont été ajoutées avec succès.";
            } catch(PDOException $e) {
                echo "Une erreur s'est produite lors de l'ajout des données : " . $e->getMessage();
            }
        }
    }

    
    function infos_user_db($pdo){
        try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM infos_user";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            foreach ($result as $row) {
                $birthday = $row['birthday'];
                $address = $row['address'];
                $city = $row['city'];
                $phone1 = $row['phone1'];
                $phone2 = $row['phone2'];
                $codepostal = $row['codepostal'];
                $date_now_user_infos = $row['date_now_user_infos'];

                echo "birthday : $birthday<br>";
                echo "address : $address<br>";
                echo "city : $city<br>";
                echo "phone1 : $phone1<br>";
                echo "phone2 : $phone2<br>";
                echo "codepostal : $codepostal<br>";
                echo "date_now_user_infos : $date_now_user_infos<br>";
                echo "<br>";
            }
        } else {
            echo "Aucun enregistrement trouvé.";
        }

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }



?>